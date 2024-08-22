<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    :root {
        --surface-color: #fff;
        --curve: 40;
    }

    * {
        box-sizing: border-box;
    }
    body{
        font-family: Roboto, sans-serif;
        background-color:#f0f0ed;
    }

    /* Styles for layout */
    .custom-container {
        margin-top: 20px;
        display: flex;
        justify-content: space-evenly;
        align-items: flex-start;
    }
    .filters {
        /* margin-left: -1px; */
        width: 257px;
        height: 100%;
        display: flex;
        box-shadow: 0px 3px 6px 0 rgb(212 212 212 / 35%);
        border-radius: 4px;
        flex-direction: column;
        background-color: #ffffff;
        flex-direction: column;
    }
    .product-listing {
        list-style-type: none;
        width: 75%;
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        box-shadow: 0px 3px 6px 0 rgb(212 212 212 / 35%);
        border-radius: 4px;
        background-color: #ffffff;
    }
    .filter-section {
        margin-left: 18px;
        /* margin-bottom: 20px; */
    }
   
    .dropdown-label {
       
        cursor: pointer; /* Change cursor to pointer */
    }
    .sub-menu {
        background-color: gray;
        width: 226px;
        display: none;
        flex-direction: column;
        align-items: flex-start;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
    }
    .sub-menu-item {
        cursor: pointer; /* Change cursor to pointer */
    }
    .product {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 10px;
    }
    .checkbox-item {
        display: flex;
        align-items: baseline;
    }

    .listing {
        margin-top: 33px;
        margin-bottom: 15px;
    }
    .footer {
        /*background-color: #9e9508 !important;*/
        /*color: yellow;*/
        justify-content: space-around;
        display: flex;
        padding: 20px;
        margin-top: 10px;
    }
    .footer-logo {
        /*margin-top: 37px;*/
        width: 150px;
        height: auto;
        padding: initial;
    }
    .footer-links {
        display: flex;
    }
    .footer-contact {
        display: flex;
        justify-content: space-evenly;
    }
</style>

<div class="custom-container">
    <div class="filters-fixed">
    <div class="filters">
        <h2 class="filter-heading">Filter</h2>
        <!-- Filter Section -->
        <div class="filter-section">
            <div class="dropdown" onclick="toggleSubMenu(this)">
                <div class="dropdown-label">Price</div>
                <div class="sub-menu">
                    <!-- Sub-menu items here -->
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option1" value="option1" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option1">$0 - $25</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option2" value="option2" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option2">$25 - $50</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option3" value="option3" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option3">$50 - $100</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option4" value="option4" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option4">$100+</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-section">
            <div class="dropdown" onclick="toggleSubMenu(this)">
                <div class="dropdown-label">Flavour</div>
                <div class="sub-menu">
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option3" value="option3" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option3">Chocalate</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option4" value="option4" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option4">cheese</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-section">
            <div class="dropdown" onclick="toggleSubMenu(this)">
                <div class="dropdown-label">Cake type</div>
                <div class="sub-menu">
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option3" value="option3" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option3">doll cake</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option4" value="option4" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option4">designer cake</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-section">
            <div class="dropdown" onclick="toggleSubMenu(this)">
                <div class="dropdown-label">ingredients</div>
                <div class="sub-menu">
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option3" value="option3" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option3">eggless</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option4" value="option4" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option4">pure veg</label></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-section">
            <div class="dropdown" onclick="toggleSubMenu(this)">
                <div class="dropdown-label">Weight</div>
                <div class="sub-menu">
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option3" value="option3" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option3">5kg</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="price-option4" value="option4" onclick="stopPropagation(event)" />
                        <label class="checkbox-label" for="price-option4">10kg</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Other filter sections -->
    </div>
    </div>
    <div class="product-listing">
        <!-- Product Listing Section -->
        <div class="listing">
            <li>
                <a href="<?php base_url(); ?>view_details" class="card">
                    <img src="https://i.pinimg.com/564x/fd/ac/ce/fdacce1dcba523b1c2a420046472419e.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                            <img
                                class="card__thumb"
                                src="https://img.freepik.com/free-photo/delicious-cake-with-fruits_23-2150727534.jpg?t=st=1709726477~exp=1709730077~hmac=55bd521c9de9b8d20adf38b7f41fdc467f1db16a5c963eea3f8357c8cc28f50c&w=360"
                                alt=""
                            />
                            <div class="card__header-text">
                                <h3 class="card__title">Orchids Bouquet</h3>
                                <p class="h5 m-0">₹782.00</p>
                            </div>
                        </div>
                        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                    </div>
                </a>
            </li>
        </div>
        <div class="listing">
            <li>
                <a href="" class="card">
                    <img src="https://i.pinimg.com/564x/fd/ac/ce/fdacce1dcba523b1c2a420046472419e.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                            <img
                                class="card__thumb"
                                src="https://img.freepik.com/free-photo/delicious-cake-with-fruits_23-2150727534.jpg?t=st=1709726477~exp=1709730077~hmac=55bd521c9de9b8d20adf38b7f41fdc467f1db16a5c963eea3f8357c8cc28f50c&w=360"
                                alt=""
                            />
                            <div class="card__header-text">
                                <h3 class="card__title">Orchids Bouquet</h3>
                                <p class="h5 m-0">₹782.00</p>
                            </div>
                        </div>
                        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        <div class="card__buttons">
                            <button class="card__add-to-cart-button">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </li>
        </div>
        <div class="listing">
            <li>
                <a href="" class="card">
                    <img src="https://i.pinimg.com/564x/fd/ac/ce/fdacce1dcba523b1c2a420046472419e.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                            <img
                                class="card__thumb"
                                src="https://img.freepik.com/free-photo/delicious-cake-with-fruits_23-2150727534.jpg?t=st=1709726477~exp=1709730077~hmac=55bd521c9de9b8d20adf38b7f41fdc467f1db16a5c963eea3f8357c8cc28f50c&w=360"
                                alt=""
                            />
                            <div class="card__header-text">
                                <h3 class="card__title">Orchids Bouquet</h3>
                                <p class="h5 m-0">₹782.00</p>
                            </div>
                        </div>
                        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        <div class="card__buttons">
                            <button class="card__add-to-cart-button">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </li>
        </div>
        <div class="listing">
            <li>
                <a href="" class="card">
                    <img src="https://i.pinimg.com/564x/fd/ac/ce/fdacce1dcba523b1c2a420046472419e.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                            <img
                                class="card__thumb"
                                src="https://img.freepik.com/free-photo/delicious-cake-with-fruits_23-2150727534.jpg?t=st=1709726477~exp=1709730077~hmac=55bd521c9de9b8d20adf38b7f41fdc467f1db16a5c963eea3f8357c8cc28f50c&w=360"
                                alt=""
                            />
                            <div class="card__header-text">
                                <h3 class="card__title">Orchids Bouquet</h3>
                                <p class="h5 m-0">₹782.00</p>
                            </div>
                        </div>
                        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        <div class="card__buttons">
                            <button class="card__add-to-cart-button">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </li>
        </div>
        <div class="listing">
            <li>
                <a href="" class="card">
                    <img src="https://i.pinimg.com/564x/fd/ac/ce/fdacce1dcba523b1c2a420046472419e.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                            <img
                                class="card__thumb"
                                src="https://img.freepik.com/free-photo/delicious-cake-with-fruits_23-2150727534.jpg?t=st=1709726477~exp=1709730077~hmac=55bd521c9de9b8d20adf38b7f41fdc467f1db16a5c963eea3f8357c8cc28f50c&w=360"
                                alt=""
                            />
                            <div class="card__header-text">
                                <h3 class="card__title">Orchids Bouquet</h3>
                                <p class="h5 m-0">₹782.00</p>
                            </div>
                        </div>
                        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        <div class="card__buttons">
                            <button class="card__add-to-cart-button">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </li>
        </div>
        <div class="listing">
            <li>
                <a href="" class="card">
                    <img src="https://i.pinimg.com/564x/fd/ac/ce/fdacce1dcba523b1c2a420046472419e.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                            <img
                                class="card__thumb"
                                src="https://img.freepik.com/free-photo/delicious-cake-with-fruits_23-2150727534.jpg?t=st=1709726477~exp=1709730077~hmac=55bd521c9de9b8d20adf38b7f41fdc467f1db16a5c963eea3f8357c8cc28f50c&w=360"
                                alt=""
                            />
                            <div class="card__header-text">
                                <h3 class="card__title">Orchids Bouquet</h3>
                                <p class="h5 m-0">₹782.00</p>
                            </div>
                        </div>
                        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        <div class="card__buttons">
                            <button class="card__add-to-cart-button">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </li>
        </div>
        <!-- More products -->
    </div>
</div>

<?= $this->endSection() ?>
