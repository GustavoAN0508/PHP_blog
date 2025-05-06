<?php
    include_once("templates/header.php");
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL?>/images/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsam, provident veniam temporibus fugit fuga hic ratione non sint dolor laudantium eum cum libero. Ut ipsum ex obcaecati dolor quod!
        Ratione asperiores iure aspernatur maxime ex obcaecati necessitatibus saepe corporis officiis, aperiam doloremque maiores, fugit deleniti laborum, autem nam itaque assumenda nobis odit repellat rerum suscipit voluptate dolor vero. Tempora!
        Assumenda facere quas inventore sint omnis reprehenderit vel odit, amet cum obcaecati incidunt doloremque non iure quos magni cupiditate ipsa pariatur! Omnis ea vero excepturi maiores vel autem tenetur quibusdam.
        Eligendi pariatur perferendis blanditiis, illo officia enim id suscipit modi tenetur animi ullam excepturi doloribus. Totam quia similique reiciendis aspernatur modi exercitationem unde quam ex rerum cum, vel impedit. Laboriosam.
        Aliquam, reprehenderit perferendis quam inventore laborum earum facilis necessitatibus. Inventore modi eos suscipit est numquam sed ipsa molestias nisi necessitatibus. Quas praesentium quisquam in quis consequatur? Quisquam dolorem pariatur magni.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsam, provident veniam temporibus fugit fuga hic ratione non sint dolor laudantium eum cum libero. Ut ipsum ex obcaecati dolor quod!
        Ratione asperiores iure aspernatur maxime ex obcaecati necessitatibus saepe corporis officiis, aperiam doloremque maiores, fugit deleniti laborum, autem nam itaque assumenda nobis odit repellat rerum suscipit voluptate dolor vero. Tempora!
        Assumenda facere quas inventore sint omnis reprehenderit vel odit, amet cum obcaecati incidunt doloremque non iure quos magni cupiditate ipsa pariatur! Omnis ea vero excepturi maiores vel autem tenetur quibusdam.
        Eligendi pariatur perferendis blanditiis, illo officia enim id suscipit modi tenetur animi ullam excepturi doloribus. Totam quia similique reiciendis aspernatur modi exercitationem unde quam ex rerum cum, vel impedit. Laboriosam.
        Aliquam, reprehenderit perferendis quam inventore laborum earum facilis necessitatibus. Inventore modi eos suscipit est numquam sed ipsa molestias nisi necessitatibus. Quas praesentium quisquam in quis consequatur? Quisquam dolorem pariatur magni.</p>
        </div> 
        <aside id="nav-container">
        <h3 id="tags-title"> Tags </h3>
        <ul id="tags-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
        <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>  
        </ul>
    </aside>

    </main>

<?php
    include_once("templates/footer.php");

?>