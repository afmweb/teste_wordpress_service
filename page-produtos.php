<?php get_header(); ?>
<br />
<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-xs-12 margin-topo80">
            <table class="table table-responsive table-bordered table-hover magin-topo40">
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                </tr>

                <?php
                $produtos = new WP_Query(array(
                    'post_type' => 'produtos',
                    'posts_per_page' => -1
                ));
                while ($produtos->have_posts()): $produtos->the_post();
                    ?>
                    <tr>
                        <th><?php the_title() ?></th>
                        <th><?php the_field('descricao') ?></th>
                        <th><?php the_field('preco') ?></th>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>
<br>
<br>
<br>
<?php
get_footer();
