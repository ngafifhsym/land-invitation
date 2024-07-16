<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'title' => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'name' => "Ngafiff Hasyim ash'ari",
        'email' => 'ngafifhasyim209@gmail.com',
        'image' => 'IMG_6908.PNG',
        'title' => 'About'
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => "Judul post pertama",
            'slug' => 'judul-post-pertama',
            "author" => "Ngaffif",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque tempora veritatis id. Iste perferendis doloribus similique minus quaerat totam blanditiis libero ipsa, non molestiae, harum quas perspiciatis minima incidunt vero nobis exercitationem praesentium provident. Officia assumenda vel saepe, quam eius in facilis voluptates mollitia tenetur sunt quaerat et esse maxime nostrum! Est mollitia quisquam vero animi? Nobis consequuntur ex qui autem consectetur voluptates iste fugiat quis quasi, repellat iure quisquam praesentium, tenetur similique! Neque accusamus provident laudantium officia voluptates adipisci, velit ducimus vitae commodi laborum quam voluptate id facilis, voluptatibus expedita molestiae magnam illo, dignissimos sunt magni natus necessitatibus explicabo. Et officiis sed, distinctio iste ut excepturi ea eaque pariatur error ipsa doloribus voluptatem delectus eveniet nam fuga exercitationem cum facilis itaque nostrum facere similique quod. Repellendus error explicabo, officia facere eius facilis? Officiis nobis consectetur amet quibusdam dignissimos laboriosam voluptates suscipit neque, voluptate illo, omnis dolor mollitia. Officia, eos? Beatae eius, fugiat architecto possimus modi nesciunt earum rem itaque accusamus blanditiis cumque vero dicta nisi expedita! Molestias id aliquid ipsa voluptates at commodi illum vel cupiditate ad non, deleniti vitae quibusdam ex quos dolorem voluptas vero saepe harum amet officiis neque iste? Eum autem repudiandae nulla necessitatibus molestiae officiis."
        ],
        [
            'title' => "Judul post Kedua",
            'slug' => 'judul-post-kedua',
            "author" => "Hasyim",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque tempora veritatis id. Iste perferendis doloribus similique minus quaerat totam blanditiis libero ipsa, non molestiae, harum quas perspiciatis minima incidunt vero nobis exercitationem praesentium provident. Officia assumenda vel saepe, quam eius in facilis voluptates mollitia tenetur sunt quaerat et esse maxime nostrum! Est mollitia quisquam vero animi? Nobis consequuntur ex qui autem consectetur voluptates iste fugiat quis quasi, repellat iure quisquam praesentium, tenetur similique! Neque accusamus provident laudantium officia voluptates adipisci, velit ducimus vitae commodi laborum quam voluptate id facilis, voluptatibus expedita molestiae magnam illo, dignissimos sunt magni natus necessitatibus explicabo. Et officiis sed, distinctio iste ut excepturi ea eaque pariatur error ipsa doloribus voluptatem delectus eveniet nam fuga exercitationem cum facilis itaque nostrum facere similique quod. Repellendus error explicabo, officia facere eius facilis? Officiis nobis consectetur amet quibusdam dignissimos laboriosam voluptates suscipit neque, voluptate illo, omnis dolor mollitia. Officia, eos? Beatae eius, fugiat architecto possimus modi nesciunt earum rem itaque accusamus blanditiis cumque vero dicta nisi expedita! Molestias id aliquid ipsa voluptates at commodi illum vel cupiditate ad non, deleniti vitae quibusdam ex quos dolorem voluptas vero saepe harum amet officiis neque iste? Eum autem repudiandae nulla necessitatibus molestiae officiis."
        ],
    ];
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

Route::get('/posts/{slug}', function($slug){
    $blog_posts = [
        [
            'title' => "Judul post pertama",
            'slug' => 'judul-post-pertama',
            "author" => "Ngaffif",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque tempora veritatis id. Iste perferendis doloribus similique minus quaerat totam blanditiis libero ipsa, non molestiae, harum quas perspiciatis minima incidunt vero nobis exercitationem praesentium provident. Officia assumenda vel saepe, quam eius in facilis voluptates mollitia tenetur sunt quaerat et esse maxime nostrum! Est mollitia quisquam vero animi? Nobis consequuntur ex qui autem consectetur voluptates iste fugiat quis quasi, repellat iure quisquam praesentium, tenetur similique! Neque accusamus provident laudantium officia voluptates adipisci, velit ducimus vitae commodi laborum quam voluptate id facilis, voluptatibus expedita molestiae magnam illo, dignissimos sunt magni natus necessitatibus explicabo. Et officiis sed, distinctio iste ut excepturi ea eaque pariatur error ipsa doloribus voluptatem delectus eveniet nam fuga exercitationem cum facilis itaque nostrum facere similique quod. Repellendus error explicabo, officia facere eius facilis? Officiis nobis consectetur amet quibusdam dignissimos laboriosam voluptates suscipit neque, voluptate illo, omnis dolor mollitia. Officia, eos? Beatae eius, fugiat architecto possimus modi nesciunt earum rem itaque accusamus blanditiis cumque vero dicta nisi expedita! Molestias id aliquid ipsa voluptates at commodi illum vel cupiditate ad non, deleniti vitae quibusdam ex quos dolorem voluptas vero saepe harum amet officiis neque iste? Eum autem repudiandae nulla necessitatibus molestiae officiis."
        ],
        [
            'title' => "Judul post Kedua",
            'slug' => 'judul-post-kedua',
            "author" => "Hasyim",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque tempora veritatis id. Iste perferendis doloribus similique minus quaerat totam blanditiis libero ipsa, non molestiae, harum quas perspiciatis minima incidunt vero nobis exercitationem praesentium provident. Officia assumenda vel saepe, quam eius in facilis voluptates mollitia tenetur sunt quaerat et esse maxime nostrum! Est mollitia quisquam vero animi? Nobis consequuntur ex qui autem consectetur voluptates iste fugiat quis quasi, repellat iure quisquam praesentium, tenetur similique! Neque accusamus provident laudantium officia voluptates adipisci, velit ducimus vitae commodi laborum quam voluptate id facilis, voluptatibus expedita molestiae magnam illo, dignissimos sunt magni natus necessitatibus explicabo. Et officiis sed, distinctio iste ut excepturi ea eaque pariatur error ipsa doloribus voluptatem delectus eveniet nam fuga exercitationem cum facilis itaque nostrum facere similique quod. Repellendus error explicabo, officia facere eius facilis? Officiis nobis consectetur amet quibusdam dignissimos laboriosam voluptates suscipit neque, voluptate illo, omnis dolor mollitia. Officia, eos? Beatae eius, fugiat architecto possimus modi nesciunt earum rem itaque accusamus blanditiis cumque vero dicta nisi expedita! Molestias id aliquid ipsa voluptates at commodi illum vel cupiditate ad non, deleniti vitae quibusdam ex quos dolorem voluptas vero saepe harum amet officiis neque iste? Eum autem repudiandae nulla necessitatibus molestiae officiis."
        ],
    ];
    $new_posts = [];
    foreach($blog_posts as $post){
        if ($post['slug'] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
