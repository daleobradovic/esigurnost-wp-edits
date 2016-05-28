<?php get_header(); ?>

<!--	Sekcija: O nama	-->
<div id="onama">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_theme_mod("onama-slika"); ?>" alt="<?php echo get_theme_mod("onama-naslov"); ?>" class="img-responsive center-block">
            </div>
            <div class="col-md-6">
                <div class="onama-tekst">
                    <div class="naslov-sekcije">
                        <h2><?php echo get_theme_mod("onama-naslov"); ?></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php echo get_theme_mod("onama-tekst"); ?>
                    <ul class="onama-lista">
                        <?php if(!empty(get_theme_mod("prva-opcija"))) { ?>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong><?php echo get_theme_mod("prva-opcija"); ?></strong><?php if(!empty(get_theme_mod("prva-opcija-opis"))) echo ' - <em>' . get_theme_mod("prva-opcija-opis") . '</em>'; ?>
                                <!-- Button trigger modal -->
                                <?php if(!empty(get_theme_mod("prva-opcija-tekst"))) { ?>
                                <button type="button" class="btn btn-crvena btn-xs" data-toggle="modal" data-target="#prva-opcija">
                                    Više
                                </button>
                                <?php } ?>
                                <!-- Modal -->
                                <div class="modal fade" id="prva-opcija" tabindex="-1" role="dialog" aria-labelledby="prvaOpcija">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Zatvori"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="prvaOpcija"><?php echo get_theme_mod("prva-opcija"); ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <?php if(!empty(get_theme_mod("prva-opcija-slika"))) { ?>
                                                    <img src='<?php echo get_theme_mod("prva-opcija-slika"); ?>' alt='<?php echo get_theme_mod("prva-opcija-opis"); ?>' class='img-responsive center-block'/>
                                                <?php } ?>
                                                <?php echo get_theme_mod("prva-opcija-tekst"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                        <?php if(!empty(get_theme_mod("druga-opcija"))) { ?>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong><?php echo get_theme_mod("druga-opcija"); ?></strong> - <em><?php echo get_theme_mod("druga-opcija-opis"); ?></em>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-crvena btn-xs" data-toggle="modal" data-target="#druga-opcija">
                                    Više
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="druga-opcija" tabindex="-1" role="dialog" aria-labelledby="drugaOpcija">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="drugaOpcija"><?php echo get_theme_mod("druga-opcija"); ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <?php if(!empty(get_theme_mod("druga-opcija-slika"))) { ?>
                                                    <img src='<?php echo get_theme_mod("druga-opcija-slika"); ?>' alt='<?php echo get_theme_mod("druga-opcija-opis"); ?>' class='img-responsive center-block'/>
                                                <?php } ?>
                                                <?php echo get_theme_mod("druga-opcija-tekst"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                        <?php if(!empty(get_theme_mod("treca-opcija"))) { ?>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong><?php echo get_theme_mod("treca-opcija"); ?></strong> - <em><?php echo get_theme_mod("treca-opcija-opis"); ?></em>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-crvena btn-xs" data-toggle="modal" data-target="#treca-opcija">
                                    Više
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="treca-opcija" tabindex="-1" role="dialog" aria-labelledby="trecaOpcija">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="trecaOpcija"><?php echo get_theme_mod("treca-opcija"); ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <?php if(!empty(get_theme_mod("treca-opcija-slika"))) { ?>
                                                    <img src='<?php echo get_theme_mod("treca-opcija-slika"); ?>' alt='<?php echo get_theme_mod("treca-opcija-opis"); ?>' class='img-responsive center-block'/>
                                                <?php } ?>
                                                <?php echo get_theme_mod("treca-opcija-tekst"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                        <?php if(!empty(get_theme_mod("cetvrta-opcija"))) { ?>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong><?php echo get_theme_mod("cetvrta-opcija"); ?></strong> - <em><?php echo get_theme_mod("cetvrta-opcija-opis"); ?></em>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-crvena btn-xs" data-toggle="modal" data-target="#cetvrta-opcija">
                                    Više
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="cetvrta-opcija" tabindex="-1" role="dialog" aria-labelledby="cetvrtaOpcija">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="cetvrtaOpcija"><?php echo get_theme_mod("cetvrta-opcija"); ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <?php if(!empty(get_theme_mod("cetvrta-opcija-slika"))) { ?>
                                                    <img src='<?php echo get_theme_mod("cetvrta-opcija-slika"); ?>' alt='<?php echo get_theme_mod("cetvrta-opcija-opis"); ?>' class='img-responsive center-block'/>
                                                <?php } ?>
                                                <?php echo get_theme_mod("cetvrta-opcija-tekst"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php get_footer(); ?>