<?php
/**
 * Block Name: Home Block One
 */
?>

<div class="home-menuAndBlockOne-background">

    <?php include(dirname(__FILE__)."/../menu-main.php"); ?>

    <div class="container-fluid home-blockOne-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 home-blockOne-containerLeft">
                    <div>
                        <h1 class="home-blockOne-heading home-blockOne-headingOne"><span><?php the_field( 'heading_line_one' ); ?></span><br/><span class="home-blockOne-headingTwo"><?php the_field( 'heading_line_two' ); ?></span></h1>
                        <h2 class="home-blockOne-subheading"><?php the_field( 'subheading_text' ); ?></h2>
                        <?php $button_link_and_text = get_field( 'button_link_and_text' ); ?>
                        <?php if ( $button_link_and_text ) { ?>
                            <a href="<?php echo $button_link_and_text['url']; ?>" class="btn home-blockOne-button" target="<?php echo $button_link_and_text['target']; ?>"><?php echo $button_link_and_text['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 home-blockOne-containerRight">
                    <div>
                        <div class="z-depth-1-half home-blockOne-formContainer" align="center">
                            <h3 class="home-blockOne-formHeading"><?php the_field( 'contact_form_heading' ); ?></h3>
                            <h4 class="home-blockOne-formSubheading"><?php the_field( 'contact_form_subheading' ); ?></h4>
                            <?php
                            $current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                            ?>
                            <form id="contact-form" name="contact-form" action="<?php echo plugin_dir_url( __FILE__ ) ?>../../etc/home-mail.php?url=<?php echo $current_url ?>" method="POST">

                                <div class="row">
                                    <div class="col">
                                        <input type="text" id="fname" name="fname" class="form-control home-blockOne-formInput" placeholder="First Name" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" id="lname" name="lname" class="form-control home-blockOne-formInput" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <br/>
                                <input type="tel" id="phone" name="phone" class="form-control mb-4 home-blockOne-formInput" placeholder="Phone Number" required>

                                <input type="text" id="bizname" name="bizname" class="form-control mb-4 home-blockOne-formInput" placeholder="Business Name" required>

                                <input type="tel" id="bizphone" name="bizphone" class="form-control mb-4 home-blockOne-formInput" placeholder="Business Phone Number" required>

                                <input type="text" id="bizzip" name="bizzip" class="form-control mb-4 home-blockOne-formInput" placeholder="Business Zip Code" required>

                                <input type="email" id="email" name="email" class="form-control mb-4 home-blockOne-formInput" placeholder="E-mail Address" required>

                                <?php
                                $id = 0;
                                $formEmailRecipients = array();
                                if( have_rows('form_recipients') ): ?>
                                    <?php while( have_rows('form_recipients') ): the_row();
                                        $email = get_sub_field('email_address');
                                        $formEmailRecipients[$id] = $email;
                                        $id++;
                                    endwhile; ?>
                                <?php endif; ?>

                                <?php
                                $strFormEmailRecipients = implode(' ', $formEmailRecipients);
                                ?>

                                <input name="strFormEmailRecipients" type="hidden" value="<?php echo htmlspecialchars($strFormEmailRecipients) ?>"/>

                                <input name="apiMailchimp" type="hidden" value="<?php echo get_field( 'integrate_mailchimp') ?>"/>

                                <?php if(get_field( 'integrate_mailchimp') == 1){ ?>
                                    <input name="apiMailchimpList" type="hidden" value="<?php echo  get_field( 'mailchimp_audience_list' ) ?>"/>
                                <?php } ?>

                            </form>

                            <a class="btn home-blockOne-formButton" onclick="document.getElementById('contact-form').submit();"><?php the_field( 'contact_form_button' ); ?></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>