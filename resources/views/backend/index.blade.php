 @extends('backend.master')


 @section('content')
     <div class="container-fluid">
         <div class="row">
             <div class="col-xxl-3 col-xl-4 col-md-4 col-12">
                 <div class="card p-0">
                     <div class="cadr-body">
                         <div class="welcome-card">
                             <div>
                                 <h5> Exclusive weekend discounts</h5>
                                 <h3>Welcome To Zomo</h3>
                                 <a href="category.html" class="btn btn-primary w-50 mx-auto">Check
                                     Menu</a>
                                 <img class="offer" src="{{asset('backend/assets/images/dashboard/offer.gif')}}" alt="">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xxl-9 col-xl-8 col-md-8 col-12">
                 <div class="row">

                    <div class="col-12">
  <div class="card">
    <div class="card-header">
      <h5>Menu category</h5>
    </div>
    <div class="card-body">
      <div class="categories-section">
        <div class="theme-arrow">
          <div class="swiper categories-slider categories-style">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/1.png') }}" alt="p-1">
                  <h4 class="dark-text">Pizza</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/2.png') }}" alt="p-2">
                  <h4 class="dark-text">Chicken</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/3.png') }}" alt="p-3">
                  <h4 class="dark-text">Burger</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/4.png') }}" alt="p-5">
                  <h4 class="dark-text">Fries</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/5.png') }}" alt="p-6">
                  <h4 class="dark-text">Boritto</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/6.png') }}" alt="p-7">
                  <h4 class="dark-text">Taco</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/7.png') }}" alt="p-8">
                  <h4 class="dark-text">Muffin</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/8.png') }}" alt="p-9">
                  <h4 class="dark-text">Meat</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/9.png') }}" alt="p-5">
                  <h4 class="dark-text">Panner</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/10.png') }}" alt="p-11">
                  <h4 class="dark-text">Hotdog</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/11.png') }}" alt="p-12">
                  <h4 class="dark-text">Donuts</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/12.png') }}" alt="p-13">
                  <h4 class="dark-text">Coffee</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/13.png') }}" alt="p-14">
                  <h4 class="dark-text">Sandwich</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/14.png') }}" alt="p-15">
                  <h4 class="dark-text">Noddle</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/15.png') }}" alt="p-16">
                  <h4 class="dark-text">Pasta</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/16.png') }}" alt="p-17">
                  <h4 class="dark-text">Meggi</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/17.png') }}" alt="p-18">
                  <h4 class="dark-text">Momos</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/18.png') }}" alt="p-19">
                  <h4 class="dark-text">Salad</h4>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="category.html" class="food-categories">
                  <img class="img-fluid categories-img" src="{{ asset('backend/assets/images/product/19.png') }}" alt="p-20">
                  <h4 class="dark-text">Biryani</h4>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-button-next categories-next"></div>
          <div class="swiper-button-prev categories-prev"></div>
        </div>
      </div>
    </div>
  </div>
</div>




                     <div class="col-xxl-4 col-sm-6 ">
                         <div class="card widgets-card">
                             <div class="card-body">
                                 <div class="row align-items-center">
                                     <div class="col-lg-5 d-flex d-lg-block justify-content-between align-items-center">
                                         <h5>Total Sale</h5>
                                         <h2>$254.90</h2>
                                     </div>
                                     <div class="col-lg-7 col-12 p-0">
                                         <div id="daily-value"></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xxl-4 col-sm-6 ">
                         <div class="card widgets-card">
                             <div class="card-body">
                                 <div class="row align-items-center">
                                     <div class="col-lg-5 d-flex d-lg-block justify-content-between align-items-center">
                                         <h5>Total Profit</h5>
                                         <h2>$254.90</h2>
                                     </div>
                                     <div class="col-lg-7 col-12 p-0">
                                         <div id="order-value"></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xxl-4 col-xl-6 d-none d-xxl-block">
                         <div class="card widgets-card">
                             <div class="card-body">
                                 <div class="row align-items-center">
                                     <div class="col-5">
                                         <h5>Customer rate</h5>
                                         <h2>5.12%</h2>
                                     </div>
                                     <div class="col-7 p-0">
                                         <div id="admissionRatio"></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>


           <div class="col-xl-7">
  <div class="card">
    <div class="card-header">
      <h5>Order Reports</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive theme-scrollbar">
        <div>
          <table class="table user-table" id="table_id">
            <thead>
              <tr>
                <th><input id="checkall" class="custom-checkbox" type="checkbox" name="text"></th>
                <th>Food</th>
                <th>Customer</th>
                <th>Order Date</th>
                <th>Price</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>
                  <input class="custom-checkbox" type="checkbox" name="text">
                </td>
                <td>
                  <div class="table-image">
                    <img src="{{ asset('backend/assets/images/dashboard/product-2/1.jpg') }}" class="img-fluid" alt="Fish Burger">
                    <h5>Fish Burger</h5>
                  </div>
                </td>
                <td>Jessica Taylor</td>
                <td>25/10/2024</td>
                <td>$30.00</td>
                <td><div class="pending">pending</div></td>
              </tr>

              <tr>
                <td>
                  <input class="custom-checkbox" type="checkbox" name="text">
                </td>
                <td>
                  <div class="table-image">
                    <img src="{{ asset('backend/assets/images/dashboard/product-2/2.jpg') }}" class="img-fluid" alt="Pepperoni Pizza">
                    <h5>Pepperoni Pizza</h5>
                  </div>
                </td>
                <td>Jane Cooper</td>
                <td>20/1/2024</td>
                <td>$57.20</td>
                <td><div class="completed">completed</div></td>
              </tr>

              <tr>
                <td>
                  <input class="custom-checkbox" type="checkbox" name="text">
                </td>
                <td>
                  <div class="table-image">
                    <img src="{{ asset('backend/assets/images/dashboard/product-2/3.jpg') }}" class="img-fluid" alt="Hot Dog">
                    <h5>Hot Dog</h5>
                  </div>
                </td>
                <td>Olivia Anderson</td>
                <td>18/10/2024</td>
                <td>$40.00</td>
                <td><div class="pending">pending</div></td>
              </tr>

              <tr>
                <td>
                  <input class="custom-checkbox" type="checkbox" name="text">
                </td>
                <td>
                  <div class="table-image">
                    <img src="{{ asset('backend/assets/images/dashboard/product-2/4.jpg') }}" class="img-fluid" alt="Nachos">
                    <h5>Nachos</h5>
                  </div>
                </td>
                <td>Sophia Garcia</td>
                <td>02/08/2024</td>
                <td>$30.25</td>
                <td><div class="completed">completed</div></td>
              </tr>

              <tr>
                <td>
                  <input class="custom-checkbox" type="checkbox" name="text">
                </td>
                <td>
                  <div class="table-image">
                    <img src="{{ asset('backend/assets/images/dashboard/product-2/5.jpg') }}" class="img-fluid" alt="Beef Burger">
                    <h5>Beef Burger</h5>
                  </div>
                </td>
                <td>Michael Smith</td>
                <td>05/05/2024</td>
                <td>$50.00</td>
                <td><div class="pending">pending</div></td>
              </tr>

              <tr>
                <td>
                  <input class="custom-checkbox" type="checkbox" name="text">
                </td>
                <td>
                  <div class="table-image">
                    <img src="{{ asset('backend/assets/images/dashboard/product-2/6.jpg') }}" class="img-fluid" alt="Japanese Ramen">
                    <h5>Japanese Ramen</h5>
                  </div>
                </td>
                <td>David Wilson</td>
                <td>26/07/2024</td>
                <td>$71.010</td>
                <td><div class="completed">completed</div></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



             <div class="col-xl-5">
                 <div class="card">
                     <div class="card-header mb-0">
                         <h5>Sales Figures</h5>
                     </div>
                     <div class="card-body">
                         <div id="earning-average"></div>
                         <div class="special-items-box">
                             <h5>Today's Special Dish</h5>
                             <div class="dish-img"> </div>
                             <h6>Spicy Burger with Extra Cheese</h6>
                             <ul>
                                 <li>$10.53</li>
                                 <li>
                                     <i class="ri-heart-fill"></i>
                                     200k
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>



           <div class="col-12">
  <div class="trending-orders">
    <div class="trnding-title">
      <h5>Trending orders</h5>
      <a href="media.html">View All
        <i class="ri-arrow-right-s-line"></i>
      </a>
    </div>

    <div class="swiper trending-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide trending-box">
          <div class="card-body trending-items">
            <img class="img-fluid product-img" src="{{ asset('backend/assets/images/dashboard/product/1.jpg') }}" alt="Poultry Palace">
            <div class="d-flex align-items-center justify-content-between">
              <h5>Poultry Palace</h5>
              <h6>$20.00</h6>
            </div>
            <p>Healthy Foods are nutrient-Dense Foods</p>
            <ul class="rating">
              <li><h6>200 <span>Sale</span></h6></li>
              <li><p><i class="ri-star-fill"></i> 4.5</p></li>
            </ul>
            <div class="marquee-box">
              <ul class="marquee-discount">
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Month
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Month
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Month
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Month
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="swiper-slide trending-box">
          <div class="card-body trending-items">
            <img class="img-fluid product-img" src="{{ asset('backend/assets/images/dashboard/product/2.jpg') }}" alt="Wing Mastern">
            <div class="d-flex align-items-center justify-content-between">
              <h5>Wing Mastern</h5>
              <h6>$30.00</h6>
            </div>
            <p>Nutrient-dense with healthy choices</p>
            <ul class="rating">
              <li><h6>200 <span>Sale</span></h6></li>
              <li><p><i class="ri-star-fill"></i> 4.5</p></li>
            </ul>
            <div class="marquee-box">
              <ul class="marquee-discount">
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="swiper-slide trending-box">
          <div class="card-body trending-items">
            <img class="img-fluid product-img" src="{{ asset('backend/assets/images/dashboard/product/3.jpg') }}" alt="Burger Barn">
            <div class="d-flex align-items-center justify-content-between">
              <h5>Burger Barn</h5>
              <h6>$20.00</h6>
            </div>
            <p>offering numerous health benefits prevention.</p>
            <ul class="rating">
              <li><h6>200 <span>Sale</span></h6></li>
              <li><p><i class="ri-star-fill"></i> 4.5</p></li>
            </ul>
            <div class="marquee-box">
              <ul class="marquee-discount">
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Year
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Year
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Year
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Year
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="swiper-slide trending-box">
          <div class="card-body trending-items">
            <img class="img-fluid product-img" src="{{ asset('backend/assets/images/dashboard/product/4.jpg') }}" alt="Poultry Palace">
            <div class="d-flex align-items-center justify-content-between">
              <h5>Poultry Palace</h5>
              <h6>$15.00</h6>
            </div>
            <p>Healthy Foods are nutrient-Dense Foods</p>
            <ul class="rating">
              <li><h6>200 <span>Sale</span></h6></li>
              <li><p><i class="ri-star-fill"></i> 4.5</p></li>
            </ul>
            <div class="marquee-box">
              <ul class="marquee-discount">
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Year
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Year
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Year
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Year
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="swiper-slide trending-box">
          <div class="card-body trending-items">
            <img class="img-fluid product-img" src="{{ asset('backend/assets/images/dashboard/product/5.jpg') }}" alt="Mushroom">
            <div class="d-flex align-items-center justify-content-between">
              <h5>Mushroom</h5>
              <h6>$20.00</h6>
            </div>
            <p>Eggs are a nutrient powerhouse overall health.</p>
            <ul class="rating">
              <li><h6>200 <span>Sale</span></h6></li>
              <li><p><i class="ri-star-fill"></i> 4.5</p></li>
            </ul>
            <div class="marquee-box">
              <ul class="marquee-discount">
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="swiper-slide trending-box">
          <div class="card-body trending-items">
            <img class="img-fluid product-img" src="{{ asset('backend/assets/images/dashboard/product/6.jpg') }}" alt="Ribeye Junction">
            <div class="d-flex align-items-center justify-content-between">
              <h5>Ribeye Junction</h5>
              <h6>$20.00</h6>
            </div>
            <p>Healthy Foods are nutrient-Dense Foods</p>
            <ul class="rating">
              <li><h6>200 <span>Sale</span></h6></li>
              <li><p><i class="ri-star-fill"></i> 4.5</p></li>
            </ul>
            <div class="marquee-box">
              <ul class="marquee-discount">
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Month
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Month
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Month
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Month
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="swiper-slide trending-box">
          <div class="card-body trending-items">
            <img class="img-fluid product-img" src="{{ asset('backend/assets/images/dashboard/product/7.jpg') }}" alt="Latte Lounge">
            <div class="d-flex align-items-center justify-content-between">
              <h5>Latte Lounge</h5>
              <h6>$20.00</h6>
            </div>
            <p>Healthy Foods are nutrient-Dense Foods</p>
            <ul class="rating">
              <li><h6>200 <span>Sale</span></h6></li>
              <li><p><i class="ri-star-fill"></i> 4.5</p></li>
            </ul>
            <div class="marquee-box">
              <ul class="marquee-discount">
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
                <li class="discount-info">
                  <img src="{{ asset('backend/assets/images/dashboard/round.gif') }}" alt="badge"> Top Of Them Week
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div><!-- /.swiper-wrapper -->
    </div><!-- /.swiper -->
  </div>
</div>









         </div>
     </div>
 @endsection
