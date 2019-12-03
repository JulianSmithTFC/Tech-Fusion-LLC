<?php
/*
 * The file is included from _asset-script-rows.php
*/
if (! isset($data)) {
	exit; // no direct access
}

$inlineCodeStatus = $data['plugin_settings']['assets_list_inline_code_status'];
$isCoreFile       = isset($data['row']['obj']->wp) && $data['row']['obj']->wp;
$hideCoreFiles    = $data['plugin_settings']['hide_core_files'];
$isBulkUnloaded   = $data['row']['is_global_rule'];

// Does it have "children"? - other JS file(s) depending on it
$childHandles     = isset($data['all_deps']['scripts'][$data['row']['obj']->handle]) ? $data['all_deps']['scripts'][$data['row']['obj']->handle] : array();
sort($childHandles);

$jqueryIconHtmlHandle  = '<img src="'.WPACU_PLUGIN_URL.'/assets/icons/handles/icon-jquery.png" style="max-width: 22px; max-height: 22px; margin-bottom: 0;" width="18" height="18" title="" alt="" />';
$jqueryIconHtmlDepends = '<img src="'.WPACU_PLUGIN_URL.'/assets/icons/handles/icon-jquery.png" style="max-width: 22px; max-height: 22px; vertical-align: text-top; margin-bottom: 0;" width="16" height="16" alt="" />';

if ($isBulkUnloaded) {
	$data['row']['class'] .= ' wpacu_is_bulk_unloaded';
}
?>
<tr data-script-handle-row="<?php echo $data['row']['obj']->handle; ?>"
    class="wpacu_asset_row <?php echo $data['row']['class']; ?>"
    style="<?php if ($isCoreFile && $hideCoreFiles) { echo 'display: none;'; } ?>">
	<td valign="top">
        <div class="wpacu_handle" style="margin: 0 0 -8px;">
			<label for="script_<?php echo $data['row']['obj']->handle; ?>"> <?php _e('Handle:', 'wp-asset-clean-up'); ?> <strong><span style="color: green;"><?php echo $data['row']['obj']->handle; ?></span></strong> <?php if (in_array($data['row']['obj']->handle, array('jquery', 'jquery-core', 'jquery-migrate'))) { echo '&nbsp;'.$jqueryIconHtmlHandle; } ?></label>
			&nbsp;<em>* JavaScript (.js)</em>
            <?php if ($isCoreFile && ! $hideCoreFiles) { ?>
                <span class="dashicons dashicons-warning wordpress-core-file"><span class="wpacu-tooltip">WordPress Core File<br />Not sure if needed or not? In this case, it's better to leave it loaded to avoid breaking the website.</span></span>
            <?php
			}
			?>
        </div>
		<?php
		if (! empty($childHandles)) {
			$ignoreChild = (isset($data['ignore_child']['scripts'][$data['row']['obj']->handle]) && $data['ignore_child']['scripts'][$data['row']['obj']->handle]);
			?>
            <p>
                <em style="font-size: 85%;">
                    <span style="color: #0073aa; width: 19px; height: 19px; vertical-align: middle;" class="dashicons dashicons-info"></span>
                    This file has other JavaScript "children" files depending on it, thus, by unloading it, the following will also be unloaded:
                    <span style="color: green; font-weight: 600;">
                        <?php echo implode('<span style="color: black;">,</span> ', $childHandles); ?>
                    </span>
                </em>
                <label for="script_<?php echo $data['row']['obj']->handle; ?>_ignore_children">
                    <input type="hidden" name="wpacu_ignore_child[scripts][<?php echo $data['row']['obj']->handle; ?>]" value="" />
                    &#10230; <input id="script_<?php echo $data['row']['obj']->handle; ?>_ignore_children"
                                    type="checkbox"
					                <?php if ($ignoreChild) { ?>checked="checked"<?php } ?>
                                    name="wpacu_ignore_child[scripts][<?php echo $data['row']['obj']->handle; ?>]"
                                    value="1" /> <small><?php _e('Ignore dependency rule and keep the "children" loaded', 'wp-asset-clean-up'); ?></small>
                </label>
            </p>
			<?php
		}
		?>

	    <?php
	    $ver = (isset($data['row']['obj']->ver) && trim($data['row']['obj']->ver)) ? $data['row']['obj']->ver : $data['wp_version'];
	    $data['row']['obj']->preload_status = 'not_preloaded'; // default

	    if (isset($data['row']['obj']->src, $data['row']['obj']->srcHref) && $data['row']['obj']->src !== '' && $data['row']['obj']->srcHref) {
		    $isExternalSrc = true;

		    if (\WpAssetCleanUp\Misc::getLocalSrc($data['row']['obj']->src)
		        || strpos($data['row']['obj']->src, '/?') !== false // Dynamic Local URL
		        || strpos(str_replace(site_url(), '', $data['row']['obj']->src), '?') === 0 // Starts with ? right after the site url (it's a local URL)
		    ) {
			    $isExternalSrc = false;
		    }

		    $relSrc = str_replace(site_url(), '', $data['row']['obj']->src);

		    if (isset($data['row']['obj']->baseUrl)) {
			    $relSrc = str_replace($data['row']['obj']->baseUrl, '/', $relSrc);
		    }

		    $appendAfterSrcHref = (strpos($data['row']['obj']->srcHref, '?') === false) ? '?' : '&';

		    $isJsPreload = (isset($data['preloads']['scripts'][$data['row']['obj']->handle]) && $data['preloads']['scripts'][$data['row']['obj']->handle])
			    ? $data['preloads']['scripts'][$data['row']['obj']->handle]
			    : false;

		    if ($isJsPreload) {
			    $data['row']['obj']->preload_status = 'preloaded';
		    }
		    ?>
            <div class="wpacu-source-row" style="margin-top: 12px;">
			    <?php _e('Source:', 'wp-asset-clean-up'); ?> <a target="_blank" style="color: green;" <?php if ($isExternalSrc) { ?> data-wpacu-external-source="<?php echo $data['row']['obj']->srcHref . $appendAfterSrcHref . 'ver='. $ver; ?>" <?php } ?> href="<?php echo $data['row']['obj']->srcHref . $appendAfterSrcHref . 'ver='. $ver; ?>"><?php echo $relSrc; ?></a> <?php if ($isExternalSrc) { ?><span data-wpacu-external-source-status></span><?php } ?>
                &nbsp;&#10230;&nbsp;
                    Preload (if kept loaded)?
                    &nbsp;<select style="display: inline-block; width: auto;"
                                  name="wpacu_preloads[scripts][<?php echo $data['row']['obj']->handle; ?>]">
                        <option value="">No (default)</option>
                        <option <?php if ($isJsPreload) { ?>selected="selected"<?php } ?> value="basic">Yes, basic</option>
                    </select>
                <small>* applies site-wide</small> <small><a style="text-decoration: none; color: inherit;" target="_blank" href="https://assetcleanup.com/docs/?p=202"><span class="dashicons dashicons-editor-help"></span></a></small>
            </div>
            <?php
	    }

	    // Any tips?
	    if (isset($data['tips']['js'][$data['row']['obj']->handle]) && ($assetTip = $data['tips']['js'][$data['row']['obj']->handle])) {
		    ?>
            <div class="tip"><strong>Tip:</strong> <?php echo $assetTip; ?></div>
		    <?php
	    }
        $extraInfo = array();

	    if (isset($data['row']['obj']->deps) && ! empty($data['row']['obj']->deps)) {
		    $depsOutput = '';

		    if (is_array($data['row']['obj']->deps)) {
			    $dependsOnText = (count($data['row']['obj']->deps) === 1)
				    ? __('"Child" of one "parent" JS file:', 'wp-asset-clean-up')
				    : sprintf(__('"Child" of %s JS "parent" files:', 'wp-asset-clean-up'),
					    count($data['row']['obj']->deps));
		    } else {
		        $dependsOnText = __('"Child" of "parent" JS file(s):', 'wp-asset-clean-up');
            }

		    $depsOutput .= $dependsOnText.' ';

		    foreach ($data['row']['obj']->deps as $depHandle) {
			    if ($depHandle === 'jquery' || strpos($depHandle, 'jquery-ui-') === 0) {
				    $depHandle .= '&nbsp;'.$jqueryIconHtmlDepends;
			    }

			    $depsOutput .= '<span style="color: green; font-weight: 300;">'.$depHandle.'</span>, ';
		    }

		    $depsOutput = rtrim($depsOutput, ', ');

		    $extraInfo[] = $depsOutput;
	    }

        $extraInfo[] = __('Version:', 'wp-asset-clean-up').' '.$ver;

        if (isset($data['row']['obj']->position) && $data['row']['obj']->position !== '') {
	        $extraInfo[] = __('Position:', 'wp-asset-clean-up') . ' ' . (( $data['row']['obj']->position === 'head') ? 'HEAD' : 'BODY') . '<a class="go-pro-link-no-style" href="' . WPACU_PLUGIN_GO_PRO_URL . '?utm_source=manage_asset&utm_medium=change_js_position"><span class="wpacu-tooltip" style="width: 300px; margin-left: -146px;">Upgrade to Pro and change the location<br />of the JS file (e.g. to BODY to reduce render-blocking or to HEAD for very early triggering)</span><img width="20" height="20" src="' . WPACU_PLUGIN_URL . '/assets/icons/icon-lock.svg" valign="top" alt="" /> Change it?</a>';
        }

        // [wpacu_lite]
        if (isset($data['row']['obj']->src) && $data['row']['obj']->src) {
	        $extraInfo[] = __('File Size:', 'wp-asset-clean-up') . ' <a class="go-pro-link-no-style" href="' . WPACU_PLUGIN_GO_PRO_URL . '?utm_source=manage_asset&utm_medium=file_size"><span class="wpacu-tooltip">Upgrade to Pro and unlock all features</span><img width="20" height="20" src="' . WPACU_PLUGIN_URL . '/assets/icons/icon-lock.svg" valign="top" alt="" /> Pro Version</a>';
        }
        // [/wpacu_lite]

        if (! empty($extraInfo)) {
	        echo '<div style="margin: 0 0 10px;">'.implode(' &nbsp;/&nbsp; ', $extraInfo).'</div>';
        }
        ?>

        <div class="wrap_bulk_unload_options">
            <div class="wpacu_asset_options_wrap" style="padding: 8px 10px 6px !important;">
                <ul class="wpacu_asset_options" <?php if ($isBulkUnloaded) { echo 'style="display: none;"'; } ?>>
                    <li class="wpacu_unload_this_page">
                        <label class="wpacu_switch">
                            <input data-handle="<?php echo $data['row']['obj']->handle; ?>"
                                   class="input-unload-on-this-page <?php if (! $isBulkUnloaded) { echo 'wpacu-not-locked'; } ?> wpacu_unload_rule_input wpacu_unload_rule_for_script"
                                   id="script_<?php echo $data['row']['obj']->handle; ?>"
                                   <?php if ($isBulkUnloaded) { echo 'disabled="disabled"'; }
                                   echo $data['row']['checked']; ?>
                                   name="<?php echo WPACU_PLUGIN_ID; ?>[scripts][]"
                                   type="checkbox"
                                   value="<?php echo $data['row']['obj']->handle; ?>" />
                            <span class="wpacu_slider wpacu_round"></span>
                        </label>
                        <label class="wpacu_slider_text" for="script_<?php echo $data['row']['obj']->handle; ?>">
	                        <?php echo $data['page_unload_text']; ?>
                        </label>
                    </li>
                </ul>

                <?php
                if ($isBulkUnloaded) {
                ?>
                    <p style="margin: 0 !important;">
                        <em>
                            <?php echo sprintf(
                                __('"%s" rule is locked and irrelevant as there are global rules set below that overwrite it', 'wp-asset-clean-up'),
                                $data['page_unload_text']
                            ); ?>.
                            <?php _e('Once all the rules below are removed, this option will become available again', 'wp-asset-clean-up'); ?>.
                        </em>
                    </p>
                    <div class="wpacu-clearfix" style="margin-top: -5px; height: 0;"></div>
                    <?php
                }
                ?>
            </div>

            <div class="wpacu_asset_options_wrap">
                <?php
                // Unloaded Everywhere
                if ($data['row']['global_unloaded']) {
                    ?>
                    <div style="display: inline-block; margin-right: 15px;"><strong style="color: #d54e21;"><?php _e('This JavaScript file is unloaded site-wide (everywhere)', 'wp-asset-clean-up'); ?></strong></div>
                    <?php
                }
                ?>

                <ul class="wpacu_asset_options" <?php if ($data['row']['global_unloaded']) { echo 'style="display: inline-block; margin-right: 0;"'; } ?>>
                    <?php
                    // [START] UNLOAD EVERYWHERE
                    if ($data['row']['global_unloaded']) {
                        ?>
                        <li>
                            <label>
                                <input data-handle="<?php echo $data['row']['obj']->handle; ?>"
                                          class="wpacu_bulk_option wpacu_script wpacu_keep_site_wide_rule"
                                          type="radio"
                                          name="wpacu_options_scripts[<?php echo $data['row']['obj']->handle; ?>]"
                                          checked="checked"
                                          value="default" />
                                <?php _e('Keep site-wide rule', 'wp-asset-clean-up'); ?></label>
                        </li>

                        <li style="margin-right: 0;">
                            <label>
                                <input data-handle="<?php echo $data['row']['obj']->handle; ?>"
                                          class="wpacu_bulk_option wpacu_script wpacu_remove_site_wide_rule"
                                          type="radio"
                                          name="wpacu_options_scripts[<?php echo $data['row']['obj']->handle; ?>]"
                                          value="remove" />
                                <?php _e('Remove site-wide rule', 'wp-asset-clean-up'); ?></label>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li>
                            <label><input data-handle="<?php echo $data['row']['obj']->handle; ?>"
                                          data-handle-for="script"
                                          class="wpacu_global_unload wpacu_bulk_unload wpacu_global_script wpacu_unload_rule_input wpacu_unload_rule_for_script"
                                          id="wpacu_global_unload_script_<?php echo $data['row']['obj']->handle; ?>"
                                          type="checkbox"
                                          name="wpacu_global_unload_scripts[]"
                                          value="<?php echo $data['row']['obj']->handle; ?>"/>
                                <?php _e('Unload site-wide', 'wp-asset-clean-up'); ?> (<?php _e('everywhere', 'wp-asset-clean-up'); ?>) <small>* <?php _e('bulk unload', 'wp-asset-clean-up'); ?></small></label>
                        </li>
                        <?php
                    }
                    // [END] UNLOAD EVERYWHERE
                    ?>
                </ul>
            </div>

            <?php
            if ($data['bulk_unloaded_type'] === 'post_type') {
            ?>
                <div class="wpacu_asset_options_wrap">
                    <?php
                    // Unloaded On All Pages Belonging to the page's Post Type
                    if ($data['row']['is_post_type_unloaded']) {
                        switch ($data['post_type']) {
                            case 'product':
                                $alreadyUnloadedBulkText = __('This JavaScript file is unloaded on all WooCommerce "Product" pages', 'wp-asset-clean-up');
                                break;
                            case 'download':
                                $alreadyUnloadedBulkText = __('This JavaScript file is unloaded on all Easy Digital Downloads "Download" pages', 'wp-asset-clean-up');
                                break;
                            default:
                                $alreadyUnloadedBulkText = sprintf(__('This JavaScript file is unloaded on all <u>%s</u> post types', 'wp-asset-clean-up'), $data['post_type']);
                        }
                        ?>
                        <p><strong style="color: #d54e21;"><?php echo $alreadyUnloadedBulkText; ?>.</strong></p>
                        <?php
                    }
                    ?>
                    <ul class="wpacu_asset_options">
                        <?php
                            // [START] ALL PAGES HAVING THE SAME POST TYPE
                            if ($data['row']['is_post_type_unloaded']) {
                                ?>
                                <li>
                                    <label><input data-handle="<?php echo $data['row']['obj']->handle; ?>"
                                                  class="wpacu_post_type_option wpacu_post_type_script wpacu_keep_bulk_rule"
                                                  type="radio"
                                                  name="wpacu_options_post_type_scripts[<?php echo $data['row']['obj']->handle; ?>]"
                                                  checked="checked"
                                                  value="default"/>
                                        <?php _e('Keep bulk rule', 'wp-asset-clean-up'); ?></label>
                                </li>

                                <li>
                                    <label><input data-handle="<?php echo $data['row']['obj']->handle; ?>"
                                                  class="wpacu_post_type_option wpacu_post_type_script wpacu_remove_bulk_rule"
                                                  type="radio"
                                                  name="wpacu_options_post_type_scripts[<?php echo $data['row']['obj']->handle; ?>]"
                                                  value="remove"/>
                                        <?php _e('Remove bulk rule', 'wp-asset-clean-up'); ?></label>
                                </li>
                                <?php
                            } else {
                                switch ($data['post_type']) {
                                    case 'product':
                                        $unloadBulkText = __('Unload JS on all WooCommerce "Product" pages', 'wp-asset-clean-up');
                                        break;
                                    case 'download':
                                        $unloadBulkText = __('Unload JS on all Easy Digital Downloads "Download" pages', 'wp-asset-clean-up');
                                        break;
                                    default:
                                        $unloadBulkText = sprintf(__('Unload on All Pages of "<strong>%s</strong>" post type', 'wp-asset-clean-up'), $data['post_type']);
                                }
                                ?>
                                    <li>
                                        <label><input data-handle="<?php echo $data['row']['obj']->handle; ?>"
                                                      data-handle-for="script"
                                                      class="wpacu_bulk_unload wpacu_post_type_unload wpacu_post_type_script wpacu_unload_rule_input wpacu_unload_rule_for_script"
                                                      id="wpacu_global_unload_post_type_script_<?php echo $data['row']['obj']->handle; ?>"
                                                      type="checkbox"
                                                      name="wpacu_bulk_unload_scripts[post_type][<?php echo $data['post_type']; ?>][]"
                                                      value="<?php echo $data['row']['obj']->handle; ?>"/>
                                            <?php echo $unloadBulkText; ?> <small>* <?php _e('bulk unload', 'wp-asset-clean-up'); ?></small></label>
                                    </li>
                                <?php
                            }
                            ?>
                            </ul>
                        </div>
                        <?php
                        }
                        // [END] ALL PAGES HAVING THE SAME POST TYPE
                        ?>

            <?php
            // Only show it if "Unload site-wide" is NOT enabled
            // Otherwise, there's no point to use an unload regex if the asset is unloaded site-wide
            if (! $data['row']['global_unloaded']) {
            ?>
                <div data-script-handle="<?php echo $data['row']['obj']->handle; ?>" class="wpacu_asset_options_wrap wpacu_unload_regex_area_wrap">
                    <ul class="wpacu_asset_options">
                        <li>
                            <label for="wpacu_unload_it_regex_option_script_<?php echo $data['row']['obj']->handle; ?>">
                                <input data-handle="<?php echo $data['row']['obj']->handle; ?>"
                                       id="wpacu_unload_it_regex_option_script_<?php echo $data['row']['obj']->handle; ?>"
                                       class="wpacu_unload_it_regex_checkbox"
                                       type="checkbox"
                                       disabled="disabled"
                                       value="1"/>&nbsp;<span>Unload it for URLs with request URI matching this RegEx:</span>

                                <a class="go-pro-link-no-style"
                                   href="<?php echo WPACU_PLUGIN_GO_PRO_URL; ?>?utm_source=manage_asset&utm_medium=unload_script_by_regex"><span
                                            class="wpacu-tooltip wpacu-larger"><?php _e( 'This feature is available in the premium version of the plugin.',
                                            'wp-asset-clean-up' ); ?><br/> <?php _e( 'Click here to upgrade to Pro',
                                            'wp-asset-clean-up' ); ?>!</span><img width="20" height="20"
                                                                                  src="<?php echo WPACU_PLUGIN_URL; ?>/assets/icons/icon-lock.svg"
                                                                                  valign="top" alt=""/></a>
                            </label>

                            <a style="text-decoration: none; color: inherit; vertical-align: middle;" target="_blank"
                               href="https://assetcleanup.com/docs/?p=313#wpacu-unload-by-regex"><span
                                        class="dashicons dashicons-editor-help"></span></a>
                        </li>
                    </ul>
                </div>
            <?php
            }
            ?>
            <div class="wpacu-clearfix"></div>
        </div>
		<?php
		// Hide make an exception area if no bulk unload rules are set or selected
		?>
        <div data-script-handle="<?php echo $data['row']['obj']->handle; ?>"
             style="margin-bottom: 12px;"
             class="wpacu_exception_options_area_wrap <?php if (! $isBulkUnloaded) { echo 'wpacu_hide'; } ?>">
            <div class="wpacu_area_one">
	            <?php if ($isBulkUnloaded) { ?>
                    <strong>Make an exception</strong> and always load it:
	            <?php } else { ?>
                    If unloaded by any of the bulk rules (e.g. everywhere), <strong>make an exception</strong> and always:
	            <?php } ?>
            </div>
            <ul class="wpacu_area_two wpacu_asset_options wpacu_exception_options_area">
                <li id="wpacu_load_it_option_script_<?php echo $data['row']['obj']->handle; ?>">
                    <label><input data-handle="<?php echo $data['row']['obj']->handle; ?>"
                                  id="wpacu_load_it_option_script_<?php echo $data['row']['obj']->handle; ?>"
                                  class="wpacu_load_it_option_one wpacu_script wpacu_load_exception"
                                  type="checkbox"
                                  name="wpacu_scripts_load_it[]"
                            <?php if ($data['row']['is_load_exception_per_page']) { ?> checked="checked" <?php } ?>
                                  value="<?php echo $data['row']['obj']->handle; ?>" />
                        Load it on this page</label>
                </li>
                <li>
                    <label for="wpacu_load_it_regex_option_script_<?php echo $data['row']['obj']->handle; ?>"><input
                                data-handle="<?php echo $data['row']['obj']->handle; ?>"
                                id="wpacu_load_it_regex_option_script_<?php echo $data['row']['obj']->handle; ?>"
                                class="wpacu_load_it_option_two wpacu_script wpacu_load_exception"
                                type="checkbox"
                                disabled="disabled"
                                value="1"/>
                        Load it for URLs with request URI matching this RegEx: <a class="go-pro-link-no-style"
                                                                                  href="<?php echo WPACU_PLUGIN_GO_PRO_URL; ?>?utm_source=manage_asset&utm_medium=load_via_regex_make_exception"><span
                                    class="wpacu-tooltip wpacu-larger"><?php _e( 'This feature is available in the premium version of the plugin.',
						            'wp-asset-clean-up' ); ?><br/> <?php _e( 'Click here to upgrade to Pro',
						            'wp-asset-clean-up' ); ?>!</span><img width="20" height="20"
                                                                          src="<?php echo WPACU_PLUGIN_URL; ?>/assets/icons/icon-lock.svg"
                                                                          valign="top" alt=""/></a> <a
                                style="text-decoration: none; color: inherit;" target="_blank"
                                href="https://assetcleanup.com/docs/?p=21#wpacu-method-2"><span
                                    class="dashicons dashicons-editor-help"></span></a></label>
                </li>
            </ul>
        </div>

		<?php
		if ($data['row']['extra_data_js']) { ?>
            <div class="wpacu-assets-inline-code-wrap">
                <?php _e('Inline JavaScript code associated with the handle:', 'wp-asset-clean-up'); ?>
                <a class="wpacu-assets-inline-code-collapsible"
	               <?php if ($inlineCodeStatus !== 'contracted') { echo 'wpacu-assets-inline-code-collapsible-active'; } ?>
                   href="#"><?php _e('Show', 'wp-asset-clean-up'); ?> / <?php _e('Hide', 'wp-asset-clean-up'); ?></a>
                <div class="wpacu-assets-inline-code-collapsible-content <?php if ($inlineCodeStatus !== 'contracted') { echo 'wpacu-open'; } ?>">
                    <div>
                        <p style="margin-top: -7px !important; line-height: normal !important;">
                            <em><?php echo strip_tags($data['row']['extra_data_js']); ?></em>
                        </p>
                    </div>
                </div>
            </div>
            <?php
		}
		?>

		<!-- [wpacu_lite] -->
		<?php if (isset($data['row']['obj']->src) && $data['row']['obj']->src !== '') { ?>
			<div class="wpacu-script-attributes-area wpacu-lite">
				<div>If kept loaded, apply the following attributes: <em><a class="go-pro-link-no-style" href="<?php echo WPACU_PLUGIN_GO_PRO_URL; ?>">* <?php _e('Pro version', 'wp-asset-clean-up'); ?></a></em></div>
				<ul class="wpacu-script-attributes-settings wpacu-first">
					<li><a class="go-pro-link-no-style" href="<?php echo WPACU_PLUGIN_GO_PRO_URL; ?>"><span class="wpacu-tooltip wpacu-larger"><?php _e('This feature is available in the premium version of the plugin.', 'wp-asset-clean-up'); ?><br /> <?php _e('Click here to upgrade to Pro', 'wp-asset-clean-up'); ?>!</span><img width="20" height="20" src="<?php echo WPACU_PLUGIN_URL; ?>/assets/icons/icon-lock.svg" valign="top" alt="" /></a>&nbsp; <strong>async</strong> &#10230;</li>
					<li><label><input disabled="disabled" type="checkbox" value="on_this_page" /><?php _e('on this page', 'wp-asset-clean-up'); ?></label></li>
                    <li><label><input disabled="disabled" type="checkbox" value="everywhere" /><?php _e('everywhere', 'wp-asset-clean-up'); ?></label></li>
				</ul>
				<ul class="wpacu-script-attributes-settings">
					<li><a class="go-pro-link-no-style" href="<?php echo WPACU_PLUGIN_GO_PRO_URL; ?>"><span class="wpacu-tooltip wpacu-larger"><?php _e('This feature is available in the premium version of the plugin.', 'wp-asset-clean-up'); ?><br /> <?php _e('Click here to upgrade to Pro', 'wp-asset-clean-up'); ?>!</span><img width="20" height="20" src="<?php echo WPACU_PLUGIN_URL; ?>/assets/icons/icon-lock.svg" valign="top" alt="" /></a>&nbsp; <strong>defer</strong> &#10230;</li>
					<li><label><input disabled="disabled" type="checkbox" value="on_this_page" /><?php _e('on this page', 'wp-asset-clean-up'); ?></label></li>
                    <li><label><input disabled="disabled" type="checkbox" value="everywhere" /><?php _e('everywhere', 'wp-asset-clean-up'); ?></label></li>
				</ul>
                <div class="wpacu-clearfix"></div>
			</div>
            <div class="wpacu-clearfix"></div>
		<?php } ?>
		<!-- [/wpacu_lite] -->

		<?php
		$handleNote = (isset($data['handle_notes']['scripts'][$data['row']['obj']->handle]) && $data['handle_notes']['scripts'][$data['row']['obj']->handle])
            ? $data['handle_notes']['scripts'][$data['row']['obj']->handle]
            : false;
		?>
        <div class="wpacu-handle-notes">
	        <?php if (! $handleNote) { ?>
                <p><small>No notes have been added about this JavaScript file (e.g. why you unloaded it or decided to keep it loaded) &#10230; <a data-handle="<?php echo $data['row']['obj']->handle; ?>" href="#" class="wpacu-add-handle-note wpacu-for-script"><span class="dashicons dashicons-welcome-write-blog"></span> <label for="wpacu_handle_note_<?php echo $data['row']['obj']->handle; ?>">Add Note</label></a></small></p>
	        <?php } else { ?>
                <p><small>The following note has been added for this JavaScript file (<em>to have it removed on update, just leave the text area empty</em>):</small></p>
	        <?php } ?>
            <div <?php if ($handleNote) { echo 'style="display: block;"'; } ?> data-script-handle="<?php echo $data['row']['obj']->handle; ?>" class="wpacu-handle-notes-field">
                <textarea id="wpacu_handle_note_script_<?php echo $data['row']['obj']->handle; ?>"
                          rows="3"
                          data-wpacu-is-empty-on-page-load="<?php echo (! $handleNote) ? 'true' : 'false'; ?>"
                          <?php if (! $handleNote) { echo 'disabled="disabled"'; } ?>
                          placeholder="<?php echo esc_attr('Add your note here about this JavaScript file', 'wp-asset-clean-up'); ?>"
                          name="wpacu_handle_notes[scripts][<?php echo $data['row']['obj']->handle; ?>]"><?php echo esc_textarea($handleNote); ?></textarea>
            </div>
        </div>
        <img style="display: none;" class="wpacu-ajax-loader" src="<?php echo WPACU_PLUGIN_URL; ?>/assets/icons/icon-ajax-loading-spinner.svg" alt="" />
	</td>
</tr>