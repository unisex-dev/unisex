<?php get_header();?>
  <div class="intro-pag text-white h-100 table-cell" style="background-image: linear-gradient(to bottom, rgba(30, 30, 30, 0.75), rgba(0, 0, 0, 0.75)), url(https://source.unsplash.com/QckxruozjRg/500x500); background-position: center bottom, center bottom;  background-size: cover, cover;  background-repeat: repeat, repeat;">
  <h1 class="pagina-nombre mb-4 box-headline letters rotate-2 font-italic"><?php wp_title('', true,''); ?></h1>
  <p class="migas">
    <a href="<?php bloginfo('url')?>">Inicio</a> / <?php wp_title('', true,''); ?></p>
 </div>
  <!-- Page Content -->
 <section id="noticias">
  <div class="container-fluid p-0">
   <div class="row no-gutters">

  <?php while ( have_posts() ) : the_post(); ?>      

    <div class="col-md-3 p-0">
     <div class="card post">
      <a href="<?php echo get_permalink(); ?>">
        <img class="card-img-top" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
      </a>
      <div class="card-block bg-blanco">
       <div class="profile meta-profile">
        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
          <img src="<?php my_gravatar_url() ?>" class="profile-avatar" alt="test">
        </a>
       </div>
       <div class="meta blog-meta">
        <a href="<?php get_category_link( $category_id ); ?>"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
       </div>
       <a href="<?php echo get_permalink(); ?>">
        <h4 class="card-title mt-3 text-md-left"><?php echo wp_trim_words( get_the_title(), 6 ); ?></h4>
       </a>
       <div class="card-text text-md-left">
        <small><?php the_excerpt();?></small>
       </div>
      </div>
      <div class="card-footer text-md-left">
       <small><?php echo get_the_date('j'); ?> <?php echo get_the_date('F'); ?>, <?php echo get_the_date('Y'); ?></small>
       <a href="<?php echo get_permalink(); ?>"><button class="btn btn-primary float-right btn-sm">Ver</button></a>
      </div>
     </div>
    </div>

<?php endwhile; ?>

   </div>
  </div>
 </section>
    </div>
  </div>
  <!-- Pagination -->

 <?php get_footer(); ?>  
