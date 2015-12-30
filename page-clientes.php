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
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>

                <?php
                $clientes = new WP_Query(array(
                    'post_type' => 'clientes',
                    'posts_per_page' => -1
                ));
                while ($clientes->have_posts()): $clientes->the_post();
                    ?>
                    <tr>
                        <th><?php the_title() ?></th>
                        <th><?php the_field('email') ?></th>
                        <th><?php the_field('telefone') ?></th>
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
