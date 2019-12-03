<?php
/**
 * Block Name: Contact Block One
 */
?>

<div class="container-fluid contact-blockOne-container">
    <div class="container">
        <h1 class="contact-blockOne-heading"><?php the_field( 'heading' ); ?></h1>
        <h2 class="contact-blockOne-subheading"><?php the_field( 'subheading' ); ?></h2>
        <div>
            <ul class="nav nav-tabs">
                <?php if ( have_rows( 'tab_one' ) ) : ?>
                    <?php while ( have_rows( 'tab_one' ) ) : the_row(); ?>
                        <li class="nav-item">
                            <a id="tab-one" class="nav-link active contact-blockOne-tab-active" data-toggle="collapse" href="#collapseTabOne" aria-expanded="true" aria-controls="collapseTabOne"><?php the_sub_field( 'tab_title' ); ?></a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'tab_two' ) ) : ?>
                    <?php while ( have_rows( 'tab_two' ) ) : the_row(); ?>
                        <li class="nav-item">
                            <a id="tab-two" class="nav-link contact-blockOne-tab-normal" data-toggle="collapse" href="#collapseTabTwo" aria-expanded="false" aria-controls="collapseTabTwo"><?php the_sub_field( 'tab_title' ); ?></a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'tab_three' ) ) : ?>
                    <?php while ( have_rows( 'tab_three' ) ) : the_row(); ?>
                        <li class="nav-item">
                            <a id="tab-three" class="nav-link contact-blockOne-tab-normal" data-toggle="collapse" href="#collapseTabThree" aria-expanded="false" aria-controls="collapseTabThree"><?php the_sub_field( 'tab_title' ); ?></a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <br/>
        <div>
            <?php
            $current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            ?>
            <?php if ( have_rows( 'tab_one' ) ) : ?>
                <?php while ( have_rows( 'tab_one' ) ) : the_row(); ?>
                    <div class="collapse show contact-blockOne-containers" id="collapseTabOne">
                        <h2 class="contact-blockOne-headings"><?php the_sub_field( 'heading' ); ?></h2>

                        <form id="contact-form-one" name="contact-form-one" action="<?php echo plugin_dir_url( __FILE__ ) ?>../../etc/contact-mail.php?url=<?php echo $current_url ?>&formID=one" method="POST">
                            <div class="container-fluid">
                                <div class="row justify-content-center">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" id="fname" name="fname" class="form-control contact-blockOne-inputFields" placeholder="First Name" required="true">
                                            </div>
                                            <div class="col">
                                                <input type="text" id="lname" name="lname" class="form-control contact-blockOne-inputFields" placeholder="Last Name" required="true">
                                            </div>
                                        </div>
                                        <br>
                                        <input type="text" id="companyName" name="companyName" class="form-control contact-blockOne-inputFields" placeholder="Company Name" required="">
                                        <br>
                                        <input type="email" id="email" name="email" class="form-control contact-blockOne-inputFields" placeholder="E-mail Address" required="true">
                                        <br>
                                        <input type="tel" id="phone" name="phone" class="form-control contact-blockOne-inputFields" placeholder="Phone Number" required="true">
                                        <br>
                                        <input type="text" id="budget" name="budget" class="form-control contact-blockOne-inputFields" placeholder="Budget $0.00" required="true">
                                        <br>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <textarea class="form-control contact-blockOne-inputFields" id="message" rows="11" placeholder="Tell us about your project..." name="message" required="true"></textarea>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <p class="contact-blockOne-checkboxHeading">Project Type</p>
                                        <?php
                                        $id = 0;
                                        $checkboxesID = array();
                                        $checkboxesLabel = array();
                                        if( have_rows('service_options') ): ?>
                                            <?php while( have_rows('service_options') ): the_row();
                                                $label = get_sub_field('checkbox_option');
                                                ?>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input contact-blockOne-checkboxes" id="checkbox-<?php echo $id ?>" name="checkbox-<?php echo $id ?>">
                                                    <label class="custom-control-label contact-blockOne-checkboxLables" for="checkbox-<?php echo $id ?>"><?php echo $label ?></label>
                                                </div>
                                                <?php
                                                $checkboxesID[$id] = 'checkbox-' . $id;
                                                $checkboxesLabel[$id] = $label;
                                                $id++;
                                            endwhile; ?>
                                        <?php endif; ?>

                                        <?php
                                        $strCheckboxesIDs = implode('~', $checkboxesID);
                                        $strCheckboxesLabels = str_replace(' ', '_', implode('~', $checkboxesLabel));
                                        ?>

                                        <input name="strCheckboxesIDs" type="hidden" value="<?php echo htmlspecialchars($strCheckboxesIDs) ?>"/>
                                        <input name="strCheckboxesLabels" type="hidden" value="<?php echo htmlspecialchars($strCheckboxesLabels) ?>"/>

                                        <?php
                                        $id = 0;
                                        $formOneEmailRecipients = array();
                                        if( have_rows('form_recipients') ): ?>
                                            <?php while( have_rows('form_recipients') ): the_row();
                                                $email = get_sub_field('email_address');
                                                $formOneEmailRecipients[$id] = $email;
                                                $id++;
                                            endwhile; ?>
                                        <?php endif; ?>

                                        <?php
                                        $strFormOneEmailRecipients = implode(' ', $formOneEmailRecipients);
                                        ?>

                                        <input name="strFormOneEmailRecipients" type="hidden" value="<?php echo htmlspecialchars($strFormOneEmailRecipients) ?>"/>


                                        <button id="contact-form-one-btn" class="btn contact-blockOne-submitButton">
                                            <?php the_sub_field( 'submit_button_text' ); ?>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'tab_two' ) ) : ?>
                <?php while ( have_rows( 'tab_two' ) ) : the_row(); ?>
                    <div class="collapse contact-blockOne-containers" id="collapseTabTwo">
                        <h2 class="contact-blockOne-headings"><?php the_sub_field( 'heading' ); ?></h2>
                        <?php the_sub_field( 'calendar_html' ); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'tab_three' ) ) : ?>
                <?php while ( have_rows( 'tab_three' ) ) : the_row(); ?>
                    <div class="collapse contact-blockOne-containers" id="collapseTabThree">
                        <h2 class="contact-blockOne-headings"><?php the_sub_field( 'heading' ); ?></h2>

                        <form id="contact-form-two" name="contact-form" action="<?php echo plugin_dir_url( __FILE__ ) ?>../../etc/contact-mail.php?url=<?php echo $current_url ?>&formID=two" method="POST">
                            <div class="container-fluid">
                                <div class="row justify-content-center">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" id="fname" name="fname" class="form-control contact-blockOne-inputFields" placeholder="First Name" required="true">
                                            </div>
                                            <div class="col">
                                                <input type="text" id="lname" name="lname" class="form-control contact-blockOne-inputFields" placeholder="Last Name" required="true">
                                            </div>
                                        </div>
                                        <br>
                                        <input type="text" id="companyName" name="companyName" class="form-control contact-blockOne-inputFields" placeholder="Company Name" required="">
                                        <br>
                                        <input type="email" id="email" name="email" class="form-control contact-blockOne-inputFields" placeholder="E-mail Address" required="true">
                                        <br>
                                        <input type="tel" id="phone" name="phone" class="form-control contact-blockOne-inputFields" placeholder="Phone Number" required="true">
                                        <br>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <textarea class="form-control contact-blockOne-inputFields" id="message" rows="8" placeholder="I would like more information on..." name="message" required="true"></textarea>

                                        <?php
                                        $id = 0;
                                        $formTwoEmailRecipients = array();
                                        if( have_rows('form_recipients') ): ?>
                                            <?php while( have_rows('form_recipients') ): the_row();
                                                $email = get_sub_field('email_address');
                                                $formTwoEmailRecipients[$id] = $email;
                                                $id++;
                                            endwhile; ?>
                                        <?php endif; ?>

                                        <?php
                                        $strFormTwoEmailRecipients = implode(' ', $formTwoEmailRecipients);
                                        ?>

                                        <input name="strFormTwoEmailRecipients" type="hidden" value="<?php echo htmlspecialchars($strFormTwoEmailRecipients) ?>"/>

                                        <button id="contact-form-two-btn" class="btn contact-blockOne-submitButton">
                                            <?php the_sub_field( 'submit_button_text' ); ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
