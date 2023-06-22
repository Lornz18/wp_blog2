<?php get_header(); ?>

<div class="banner__single">
    <div class="container">
        <div class="banner__top">
            <h1><?php the_title(); ?></h1>
            <ul>
                <li><?php echo get_the_date('M j, Y');?></li>
                <li><?php echo get_the_author_meta('first_name'); ?></li>
            </ul>
        </div>
        <div class="banner__bottom">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque veniam ab fugit illo iure quis molestiae accusantium alias, culpa saepe! Similique temporibus, neque ratione animi, velit delectus tenetur aliquid cumque, quos enim deleniti nostrum fugit laboriosam labore commodi consequatur at.</p>
            <img src="http://via.placeholder.com/600x400" alt="">
        </div>
    </div>
</div>

<article class="article__single">
    <div class="container">
        <div class="article__wrapper">
            <div class="article__info">
                <div>
                    <h3>Category</h3>
                    <p>Fashion</p>
                </div>
                <div>
                    <h3>Tags</h3>
                    <ul>
                        <li>News</li>
                        <li>Technology</li>
                        <li>Science</li>
                    </ul>
                </div>
                <div>
                    <h3>Author</h3>
                    <p>Loverboy</p>
                </div>
                <div>
                    <h3>Reading</h3>
                    <P>10mins</P>
                </div>
            </div>
            <div class="article__body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quae voluptatem fuga consequatur eos nostrum excepturi alias quam, fugiat iusto error at amet temporibus! Illo earum provident maxime quia itaque unde veritatis in sit aspernatur quasi. Aliquam quo tempora, quibusdam amet repudiandae sequi minima facilis similique voluptas inventore earum deserunt?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab minima dolor adipisci sapiente nulla qui quae expedita nihil cumque architecto?</p>
                <img src="<?php echo get_template_directory() . '/screenshot.jpg' ?>" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum veniam ex nisi consectetur! Quas deleniti exercitationem debitis maiores nihil quibusdam repellat nemo, autem nobis distinctio necessitatibus doloremque architecto accusamus facere iste est voluptates suscipit consectetur laudantium et perspiciatis natus minus, nostrum minima? At blanditiis, vitae ullam vel eligendi deserunt maxime nostrum voluptatum quaerat porro. Aliquid recusandae voluptate alias necessitatibus fuga.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quos quam vitae, consequuntur saepe laborum beatae aliquam eos sint dolore magni eum dolorem illo fugit, et asperiores, culpa dolores incidunt?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut est necessitatibus corrupti repudiandae nisi maxime praesentium a dignissimos sequi, sapiente voluptatibus. Eum ipsum hic voluptatem vero harum possimus minima, aperiam ratione deleniti odit commodi consectetur eius dolores necessitatibus odio. Molestiae?</p>
            </div>
        </div>
    </div>
</article>

<?php get_footer(); ?>