 get_header(); 

<main class="site-content">
    <h2>Welcome to Provify Test Theme</h2>
     if (have_posts()) : 
         while (have_posts()) : the_post(); 
            <article>
                <h3><a href=" the_permalink(); "> the_title(); </a></h3>
                 the_excerpt(); 
            </article>
         endwhile; 
     else : 
        <p>No posts found.</p>
     endif; 
</main>

 get_footer(); 
