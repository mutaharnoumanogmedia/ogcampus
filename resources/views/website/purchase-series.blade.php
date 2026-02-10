<x-guest-layout>
    <div class="checkout-page  section-padding">
        <div class="container">
            <div class="main-cart mb-3 mb-md-5 pb-0 pb-md-5">
                <ul
                    class="cart-page-items d-flex justify-content-center list-inline align-items-center gap-3 gap-md-5 flex-wrap">
                    <li class="cart-page-item">
                        <span class=" cart-pre-number  border-radius rounded-circle me-1"> 1 </span>
                        <span class="cart-page-link ">
                            Shopping Cart </span>
                    </li>
                    <li class="cart-page-item d-flex justify-content-center">
                        <i class="ph ph-caret-circle-right fs-4"></i>
                    </li>
                    <li class="cart-page-item  active">
                        <span
                            class="cart-pre-heading badge cart-pre-number bg-primary border-radius rounded-circle me-1">
                            2 </span>
                        <span class="cart-page-link ">
                            Checkout </span>
                    </li>
                    <li class="cart-page-item d-flex justify-content-center">
                        <i class="ph ph-caret-circle-right fs-4"></i>
                    </li>
                    <li class="cart-page-item ">
                        <span class=" cart-pre-number  border-radius rounded-circle me-1"> 3 </span>
                        <span class="cart-page-link ">
                            Order Summary </span>
                    </li>
                </ul>
            </div>
            <div class="mb-5 woocommerce-info-coupon">
                <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap">
                    <div class="woocommerce-info">
                        <span class="text-body ps-2">Have a coupon?</span>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#apply-coupon">Click here
                            to enter your code</a>
                    </div>
                </div>
                <div id="apply-coupon" class="collapse mt-5">
                    <form class="checkout-coupon">
                        <p class="mt-0">If you have a coupon code, please apply it below.</p>
                        <div class="iq-checkout-coupon">
                            <input name="coupon-code" type="text" required="required" placeholder="Coupon code"
                                class="form-control">
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary text-capitalize position-relative rounded-3">
                                    <span class="button-text">apply coupon</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <form action="order-received.html">
                        <h3 class="mb-4">Billing details</h3>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="first-name" class="form-label">First Name <span
                                            class="text-primary">*</span></label>
                                    <input name="first-name" type="text" required="required" class="form-control"
                                        id="first-name">
                                </div>

                                <div class="col-md-6">
                                    <label for="last-name" class="form-label">Last Name <span
                                            class="text-primary">*</span></label>
                                    <input name="last-name" type="text" required="required" class="form-control"
                                        id="last-name">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="company-name" class="form-label">Company Name <span>(optional)</span></label>
                            <input name="billing-company" type="text" required="required" class="form-control"
                                id="company-name">
                        </div>
                        <div class="form-group">
                            <label for="first-name" class="form-label">City / Region <span
                                    class="text-primary">*</span></label>
                            <select class="select2-basic-single js-states form-control"
                                aria-label="Default select example">
                                <option selected>Germany</option>
                                <option value="1">Switzerland</option>
                                <option value="2">United States</option>
                                <option value="3">Austria</option>
                                <option value="1">Italy</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="street-address" class="form-label">Street address <span
                                    class="text-primary">*</span></label>
                            <input name="billing-address" type="text" required="required"
                                placeholder="House number and street name" class="form-control mb-2"
                                id="street-address">
                            <input name="billing-address2" type="text" required="required"
                                placeholder="Apartment, suite, unit, etc. (optional)" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="town-city" class="form-label">Town / city <span
                                    class="text-primary">*</span></label>
                            <input name="city" type="text" required="required" class="form-control"
                                id="town-city">
                        </div>
                        <div class="form-group">
                            <label for="state" class="form-label">State <span
                                    class="text-primary">*</span></label>
                            <select class="select2-basic-single js-states form-control"
                                aria-label="Default select example" id="state">
                                <option selected>Berlin</option>
                                <option value="2">Hamburg</option>
                                <option value="1">Munich</option>
                                <option value="3">Cologne</option>
                                <option value="1">Frankfurt</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="zip-code" class="form-label">Pin Code <span
                                    class="text-primary">*</span></label>
                            <input name="postcode" type="text" required="required" class="form-control"
                                id="zip-code">
                        </div>
                        <div class="form-group">
                            <label for="phone-group" class="form-label">Phone <span
                                    class="text-primary">*</span></label>
                            <input name="phone" type="tel" required="required" class="form-control"
                                id="phone-group">
                        </div>
                        <div class="form-group">
                            <label for="email-address" class="form-label">Email address <span
                                    class="text-primary">*</span></label>
                            <input name="billing-company" type="email" required="required"
                                class="form-control rounded-0 mb-5" id="email-address">
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Additional Information</h3>
                    <div class="mb-4">
                        <label class="mb-2">Order notes (optional)</label>
                        <textarea name="your-message" placeholder="Notes about your order, e.g. special notes for delivery."
                            class="form-control mb-5" required></textarea>
                    </div>
                </div>
            </div>
            <div>
                <h3>Your Order</h3>
                <div class="order_review-box">
                    <h5 class="mb-3 mt-0 mt-md-2">Product</h5>
                    <div class="checkout-review-order">
                        <div class="table-responsive">
                            <table class="table cart-table">
                                <thead class="border-bottom">
                                    <tr>
                                        <th scope="col" class="font-size-18 fw-bold">Product</th>
                                        <th scope="col" class="font-size-18 fw-bold">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <div class="text d-flex align-items-center gap-1">
                                                    <span class="text-body">{{ $series->title }}</span>
                                                    <span class="font-size-12">&nbsp;x</span>
                                                    <strong class="text-white  fw-bold">&nbsp;1</strong>
                                                </div>
                                            </td>
                                            <td class="product-total">
                                                <span class="Price-amount"><bdi class="text-body"><span>€</span>
                                                        {{ $series->price }}</bdi></span>
                                            </td>
                                        </tr>
                                     


                                </tbody>
                                <tfoot>
                                    <tr class="">
                                        <td class="p-3 fw-bold font-size-18 border-0">Subtotal</td>
                                        <td class="p-3 fw-bold border-0">
                                            <span class="mb-0 text-body">€{{ $series->price }}</span>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="p-3 fw-bold font-size-18 border-0">Total</td>
                                        <td class="p-3 fw-bold border-0">
                                            <span class="mb-0">€{{ $series->price }}</span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="checkout-payment mt-4">
                                <div class="payment-box border-bottom mb-4 pt-4 p-3">
                                <div class="payment-methods">
                                    <h6 class="mb-3 fw-bold">Select Payment Method</h6>
                                    <div class="d-flex flex-column gap-3">

                                        <label class="d-flex align-items-center gap-2">
                                            <input type="radio" name="payment_method" value="credit_card" class="me-2" checked>
                                            <img src="https://cdn-icons-png.flaticon.com/512/6963/6963703.png" alt="Credit Card" width="32" height="20" style="object-fit:contain;">
                                            <span>Credit Card</span>
                                        </label>

                                        <label class="d-flex align-items-center gap-2">
                                            <input type="radio" name="payment_method" value="apple_pay" class="me-2">
                                            <img src="https://p7.hiclipart.com/preview/123/106/539/logo-apple-icon-information-apple-logo-png.jpg" alt="Apple Pay" width="22" height="22" style="object-fit:contain;">
                                            <span>Apple Pay</span>
                                        </label>

                                        <label class="d-flex align-items-center gap-2">
                                            <input type="radio" name="payment_method" value="google_pay" class="me-2">
                                            <img src="https://9to5google.com/?attachment_id=494503" alt="Google Pay" width="22" height="22" style="object-fit:contain;">
                                            <span>Google Pay</span>
                                        </label>

                                        <label class="d-flex align-items-center gap-2">
                                            <input type="radio" name="payment_method" value="paypal" class="me-2">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="Paypal" width="32" height="20" style="object-fit:contain;">
                                            <span>Paypal</span>
                                        </label>

                                        <label class="d-flex align-items-center gap-2">
                                            <input type="radio" name="payment_method" value="revolut_pay" class="me-2">
                                            <img src="https://ibsintelligence.com/wp-content/uploads/2021/10/ibs_Revolut-300x300.jpg" alt="Revolut Pay" width="24" height="24" style="object-fit:contain;">
                                            <span>Revolut Pay</span>
                                        </label>

                                    </div>
                                </div>
                                </div>
                                <p class="mb-3 p-3 pb-0">
                                    Your personal data will be used to process your order, support your experience
                                    throughout this website, and for other purposes described in our <a
                                        href="../privacy-policy.html">privacy policy</a>
                                    .</p>
                                <div class="text-end pb-3 pe-3">
                                    <div class="iq-button">
                                        <a href="../shop/order-tracking.html"
                                            class="btn btn-primary text-capitalize position-relative load-more-btn rounded-3">
                                            <span class="button-text">Place Order</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="streamit-mobile-footer-menu" aria-label="Mobile Footer Navigation">
        <ul class="footer-menu list-inline d-flex align-items-center justify-content-between m-0">
            <li class="footer-menu-item">
                <a href="../view-all-movie.html" class="menu-link font-size-12">
                    <i class="ph ph-film-reel d-block  text-center "></i>
                    Movies </a>
            </li>
            <li class="footer-menu-item">
                <a href="../view-all-movie.html" class="menu-link font-size-12">
                    <i class="ph ph-monitor-play d-block  text-center "></i>
                    Videos </a>
            </li>
            <li class="footer-menu-item">
                <a href="../view-all-movie.html" class="menu- font-size-12">
                    <i class="ph ph-magnifying-glass d-block  text-center "></i>
                    Search </a>
            </li>
            <li class="footer-menu-item">
                <a href="../view-all-movie.html" class="menu-link font-size-12">
                    <i class="ph ph-television d-block  text-center "></i>
                    TV Shows </a>
            </li>
            <li class="footer-menu-item">
                <a href="../profile-marvin.html" class="menu-link font-size-12">
                    <i class="ph ph-user d-block  text-center "></i>
                    Profile </a>
            </li>
        </ul>
    </div>
</x-guest-layout>
