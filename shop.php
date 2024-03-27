<?php include 'header.php' ?>

<!--content  -->
<div class="content">
    <div class="content__shopping--banner">
        <div class="child">
            <h2>Shop</h2>
            <p>New Arrivals Women Collection 2018</p>
        </div>
    </div>

    <div class="content__shopping--list">
        <div class="container">
            <div class="list-sidebar">
                <div class="categories">
                    <h4>Categories</h4>
                    <ul>
                        <li>All</li>
                        <li>Women</li>
                        <li>Men</li>
                        <li>Kids</li>
                        <li>Accesories </li>
                    </ul>
                </div>
                <div class="filter">
                    <h4>Filters</h4>
                    <p>Price</p>
                    <div class="range-slide">
                        <div class="slide">
                            <div class="line" id="line" style="left: 0%; right: 0%;"></div>
                            <span class="thumb" id="thumbMin" style="left: 0%;"></span>
                            <span class="thumb" id="thumbMax" style="left: 100%;"></span>
                        </div>
                        <input id="rangeMin" type="range" max="200" min="50" step="1" value="50">
                        <input id="rangeMax" type="range" max="200" min="50" step="1" value="200">
                    </div>
                    <div class="flex">
                        <button>Filter</button>
                        <div class="display">
                            <span>Range: </span>
                            <span id="min">50</span>
                            <span> - </span>
                            <span id="max">200</span>
                        </div>
                        
                    </div>
                    

                </div>

                <div class="color">
                    <h4>Color</h4>
                    <div class="child">
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                    </div>
                </div>

                <div class="search">
                    <input type="text" name="" id="" placeholder="Search Products...">
                    <button>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>

            </div>

            <div class="list-product">
                <div class="filter-top">
                    <div class="select">
                        <select>
                            <option>None</option>
                        </select>

                        <select>
                            <option>None</option>
                        </select>
                    </div>
                    <span>Showing 1–12 of 16 results</span>
                </div>

                <div class="list">
                    <div class="item-product">
                        <div class="img-product">
                            <img src="assets/img/item.png" alt="">
                            <div class="status">
                                <a href="">New</a>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <button>Add to cart</button>
                        </div>
                        <p>
                            <a href="detail.php">
                                Herschel supply co 25l
                            </a>
                        </p>
                        <p>$75.00</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="assets/js/shop.js"></script>
<?php include 'footer.php' ?>