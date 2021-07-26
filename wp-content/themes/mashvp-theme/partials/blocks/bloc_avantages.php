<?php
$images = get_sub_field('galerie');
$i = 0;
?>
<section class="avantagesC">
    <div class="avantages grid12 wi90 ma">
        <div class="sectiontitle purple tk-bely-display avantagetitle"><?= get_sub_field('title') ?></div>
        <div class="containerav grid12">
            <?php if( $images ): ?>
                <div class="gallery">
                    <?php foreach( $images as $image ): ?>
                        <?php $i++; ?>
                        <div class="avimg avimg<?= $i ?>" style="background-image:url('<?= $image ?>')"></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="avantagestxt">
                <div class="avtoptxt purple tk-objektiv-mk1"><?= get_sub_field('top_right_text') ?></div>
                <?php if(have_rows('mid_right_text')): ?>
                    <?php while(have_rows('mid_right_text')): the_row() ?>
                    <div class="avbottxt purple tk-objektiv-mk1">
                        <div class="avtitle sectionsubtitle green tk-objektiv-mk1"><?= get_sub_field('title') ?></div>
                        <div class="avdesc"><?= get_sub_field('texte') ?></div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if(have_rows('titre_image_texte')): ?>
        <?php while(have_rows('titre_image_texte')): the_row() ?>
            <div class="functions grid12 wi90 ma">
                <div class="sectiontitle sectionsubtitle green tk-objektiv-mk1"><?= get_sub_field('title') ?></div>
                <div class="funcimg" style="background-image:url('<?= get_sub_field('image') ?>')"></div>
                <div class="funcdesc purple tk-objektiv-mk1"><?= get_sub_field('texte') ?></div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </section>