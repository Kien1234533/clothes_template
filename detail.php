<?php
include 'header.php';
?>


<!-- Content -->
<div class="content">

    <div class="content__tool">
        <div class="container">
            <a href="">Home</a>
            <i class="fa-solid fa-chevron-right"></i>
            <a href="">Men</a>
            <i class="fa-solid fa-chevron-right"></i>
            <a href="">Product</a>
        </div>
    </div>

    <div class="content__detail">
        <div class="container">
            <div class="detail-img">
                <div class="img-child">
                    <img src="assets/img/shoe.jpg" alt="" class="thumbnail">
                    <img src="assets/img/bag.jpg" alt="" class="thumbnail">
                    <img src="assets/img/item.png" alt="" class="thumbnail">
                </div>
                <div class="img-parent">
                    <div class="i-cha i-left">
                        <i class="fa-solid fa-caret-left"></i>
                    </div>

                    <img id="imgParent" src="assets/img/item.png" alt="">
                    <div class="i-cha i-right">
                        <i class="fa-solid fa-caret-right"></i>
                    </div>
                </div>
            </div>
            <div class="detail-content">
                <h4>Boxy T-Shirt with Roll Sleeve Detail</h4>
                <h3>$22</h3>
                <p>Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.</p>
                <div class="size">
                    <span>Size</span>
                    <div class="size-child">
                        <div id="sizeS">S</div>
                        <div id="sizeM">M</div>
                        <div id="sizeL">L</div>
                        <div id="sizeXL">XL</div>
                    </div>
                </div>
                <div class="color">
                    <span>Color</span>
                    <div class="color-child">
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <div class="total">
                    <span>Quantity</span>
                    <div class="total-flex">
                        <div class="box1">
                            <div onclick="handleReduce()" id="minimize">-</div>
                            <input id="quantity" type="text" value="1">
                            <div onclick="handlePlus()" id="plus">+</div>
                        </div>
                        <div class="box2">
                            <button>Add to cart</button>
                        </div>
                        <i class="fa-regular fa-heart"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="content__tab">
        <div class="container">
            <div class="tab-manager">
                <div class="tab-title">
                    <h3 name="tab-1" onclick="tabClick(this)" class="active">Description</h3>
                    <h3 name="tab-2" onclick="tabClick(this)">Additional information</h3>
                    <h3 name="tab-3" onclick="tabClick(this)">Reviews (1)</h3>
                </div>

                <ul class="tab-content">
                    <li id="tab-1" class="active">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis molestiae, natus nam libero, harum eius numquam aperiam laudantium architecto inventore nostrum cumque porro mollitia soluta facilis cupiditate voluptatem consequatur laboriosam.
                            Praesentium eum dolores voluptatem ut ratione natus ex doloremque veniam odit quaerat autem eos ab molestiae in, harum ipsum sint voluptatibus veritatis consequatur architecto fuga? Veritatis, ad quidem! At, perferendis?
                            Vitae, commodi ipsam. Eveniet atque ad quam provident tenetur, quo dolorum earum cupiditate debitis! Tenetur ea, non molestias cupiditate dignissimos, voluptatem quidem fuga, nesciunt error quia ad? Id, nulla at.
                            Mollitia, deleniti incidunt eos iusto optio sit reiciendis tenetur quam. Nam explicabo beatae maxime tempora perferendis est natus voluptatem labore mollitia, quis qui. Accusantium eos dolorum quod pariatur, id totam.
                            Praesentium aperiam atque doloremque, fugiat voluptate perspiciatis nihil officiis assumenda numquam iste dicta nobis, ea totam laudantium sint rerum officia tempora. Dolorem molestiae, animi tenetur est necessitatibus voluptate magnam quibusdam.</p>
                    </li>
                    <li id="tab-2">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde quas, nam molestias quam dicta modi et quo nostrum consequuntur velit dolores optio explicabo animi praesentium repellendus repudiandae obcaecati illo.
                            Dolore, exercitationem quis? Facilis esse impedit quia quasi cum eveniet eius odit? Laudantium ea vero eos hic sit aut asperiores blanditiis pariatur, voluptatum quasi perspiciatis illo ex vitae quisquam suscipit?
                        </p>

                    </li>
                    <li id="tab-3">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, sapiente itaque? Voluptatibus nemo, recusandae ea quaerat neque harum quas fugit, alias cupiditate optio explicabo consequatur dignissimos architecto! Quia, culpa consequatur!
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/detail.js"></script>
<?php include 'footer.php'; ?>