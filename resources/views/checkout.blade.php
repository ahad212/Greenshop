@extends('welcome')

@section('content')
<link rel="stylesheet" href="{{asset('laraecomm/allcss/checkout.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

{{-- <div class="second">
    <div class="smain">
        <div class="cathead">
            <div class="corg">
                <span><i class="fa fa-bars" aria-hidden="true"></i> </span> <strong style="margin-left:10px;"> ALL CATEGORIES</strong>
            </div>
            <div class="catdetails">
                <ul>
                    <a href="javascript:void(0)"><li><i  class="fas fa-mobile-alt category_icon3"></i>Mobile</li></a>
                    <a href="javascript:void(0)"><li><i  class="fas fa-headphones-alt category_icon"></i> Mobile Accessories</li></a>
                    <a href="javascript:void(0)"><li><i  class="fas fa-laptop category_icon2"></i> Laptop</li></a>
                    <a href="javascript:void(0)"><li><i  class="fas fa-mouse category_icon"></i> Laptop Accessories</li></a>
                    <a href="javascript:void(0)"><li><i  class="far fa-lightbulb category_icon"></i> Electronic</li></a>
                    <a href="javascript:void(0)"><li><i  class="fab fa-uncharted category_icon"></i> Software</li></a>
                    <a href="javascript:void(0)"><li><i  class="fas fa-shield-virus category_icon2"></i> Antivirus</li></a>
                    <a href="javascript:void(0)"><li><i  class="fas fa-shield-virus category_icon2"></i> More</li></a>
                </ul>
            </div>
        </div>
    </div>
    <div class="menupart">
        <ul>
            <li><a href=""><i class="fas fa-home"></i> Home</a></li>
            <li><a href=""><i class="fas fa-store-alt"></i> Shop</a></li>
            <li><a href=""><i class="fab fa-buffer"></i> Special Offer</a></li>
            <li><a href=""><i class="fas fa-info-circle"></i> Support(Live chat)</a></li>
            <li><a href=""><i class="fas fa-phone-alt"></i> 01778543921 (9am-11pm)</a></li>
        </ul>
    </div>
</div> --}}



<div class="con-cover-checkout">
<div class="container checkoutc">
    {{-- <div class="row row-cols-1 row-cols-sm-1 row-cols-lg-2" id="returning">
        <div class="col col-lg-7">
            <div class="returning_customer">
                <div class="re_fir">Returning customer? </div>
                <div class="re_sec" id="re_sec"> Clisk here to login</div>
            </div>
            
            <div class="returning_tab" id="returning_tab">
                <p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing section.</p>
                <div class="login_modal">
                    <form id="myFormCheck">
                        <div class="form-group">
                            <input type="email" class="form-control" id="sigin_mail_return" aria-describedby="emailHelp" name="mail" placeholder="Username or email">
                        </div>
                        <div class="form-group">
                            <div class="pass">
                                <input type="password" class="form-control" id="exampleInputPassword1_return" name="pass" placeholder="Password">
                                <span class="eye_open" id="eye_open_return"><i class="far fa-eye"></i></span>
                                <span class="eye_close" id="eye_close_return"><i class="fas fa-eye-slash"></i></span>
                            </div>
                        </div>
                        <div class="form-check custom_check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1_return">
                            <label class="form-check-label user_sign" for="exampleCheck1_return">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary sub_but">Login</button>
                        <a href="#">
                            <div class="link_forget">Lost password</div>
                        </a>
                    </form>

                </div>
            </div>
        </div>
        <div class="col col-lg-5"></div>
    </div> --}}
    <!-- <br>
    <br>
    <div class="row">
        <div class="col">
            <div class="phone_otp">
                Phone <span>*</span>
                <form action="">
                    <input type="text" placeholder="017xxxxxxxx" class="form-control" required><br>
                    <button class="log_otp_but" type="submit">Login with OTP</button><br>
                </form>
                <div class="log_email_pass" id="login_em2">Login with Email & Password</div>
            </div>
        </div>
    </div> -->
    {{-- <hr style="border-bottom:1px solid black;" id="returningHr"> --}}
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
            <div class="col col-lg-7">
                <div class="billing_details">
                    <div class="billing_head">Billing details</div>
                    <div class="row">
                        <div class="col">
                            <label for="billing_name">First name <span>*</span></label>
                            <input type="text" class="form-control" id="billing_name">
                        </div>
                        <div class="col">
                            <label for="billing_lname">Last name <span>*</span></label>
                            <input type="text" class="form-control" id="billing_lname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- <label for="company_name">Company name (optional)</label>
                            <input type="text" id="company_name" class="form-control"> -->
                            <div class="country_region" style="margin-top:8px;">
                                <!-- <div class="chr">Country / Region</div>
                                <div class="bd_name"><strong>Bangladesh</strong></div> -->
                                <div class="street">
                                    <label for="street" style="margin-top:8px;">Street address <span>*</span></label>
                                    <input type="text" class="form-control" id="street" placeholder="House number and street name">
                                    <input type="text"  style="margin-top:8px;" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
                                </div>
                                <!-- <div class="town_city" style="margin-top:8px;">
                                    <label for="townc">Town / City <span>*</span></label>
                                    <input type="text" class="form-control" id="townc">
                                </div> -->
                                <div class="discrict" style="margin-top:8px;">
                                    <div class="discrictd">Town / City<span>*</span></div>
                                    <select style="width:100%;" class="js-example-basic-single" name="state" id="townSelect">
                                        <option value="AL">Dhaka</option>
                                        <option value="WY">jessore</option>
                                        <option value="WY">Magura</option>
                                        <option value="WY">Sylhet</option>
                                        <option value="WY">Barisal</option>
                                    </select>
                                </div>
                                <!-- <div class="post_code_bil" style="margin-top:8px;">
                                    <label for="posts">Postcode / Zip (optional) <span>*</span></label>
                                    <input type="text" class="form-control" id="posts">   
                                </div> -->
                                <div class="phone_bl" style="margin-top:8px;">
                                    <label for="phone_bls">Phone <span>*</span></label>
                                    <input type="text" class="form-control" id="phone_bls">   
                                </div>
                                <div class="email_bl" style="margin-top:8px;">
                                    <label for="email_bls">Email address <span>*</span></label>
                                    <input type="email" class="form-control" id="email_bls">   
                                </div>
                                <!-- <div class="form-check create_billing_ac">
                                    <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Create an accoutn?
                                    </label>
                                </div> -->
                                <div class="pass_bl" style="margin-top:8px;">
                                    <label for="pass_bld">Password <span>*</span></label>
                                    <input type="password" class="form-control" id="pass_bld">   
                                </div>
                                <div class="sign_up_bil_toggle">
                                    <!-- copy-from-account -->
                                    <form>
                                        <div class="form-group">
                                            <label for="name">Account username <span>*</span></label>
                                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <div class="pass">
                                                <label for="pass">Create account password <span>*</span></label>
                                                <input type="password" class="form-control" id="pass" placeholder="Password">
                                                <span class="eye_open1" id="eye_open1"><i class="far fa-eye"></i></span>
                                                <span class="eye_close1" id="eye_close1"><i class="fas fa-eye-slash"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="pass">
                                                <label for="exampleInputPassword3">Confirm password <span>*</span></label>
                                                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="order_notes" style="margin-top:10px;">
                                    <label for="exampleFormControlTextarea1" class="form-label">Order notes (optional)</label>
                                    <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col col-lg-5 custom_col_padd">
                <div class="your_order">
                    <strong style="font-size:20px;">Your order</strong>
                    <br>
                    <br>
                    <div class="order_box">
                            <div class="row">
                                <div class="col">
                                    <div class="order_head">
                                        <div class="namig_he_g">
                                            <div class="p_name">Product</div>
                                            <div class="s_name">Subtotal</div>
                                        </div>
                                    </div>
                                    <div class="arrayCover" id="productDetails">
                                        {{-- auto inject product array from js --}}
                                    </div>

                                    <div class="head_final custom_pad_inner">
                                        <div class="hed_f1">
                                            <div class="subto" style="color:black;">Subtotal</div>
                                            <div class="c_p_final right_al">
                                                <span id="subVal"> {{--subtotal auto inject--}} </span>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="hed_f2">
                                            <div class="shipp" style="color:black;">Shipping Area</div>
                                            <div class="flatr right_al">
                                                <div class="flatr1">
                                                    <select class="js-example-basic-single" name="state" id="selectL"  onchange="takeValue(this)">
                                                        <option value="">Add any Item</option>
                                                    </select>
                                                </div>
                                                {{-- <div class="flatr2" style="font-weight:bold;">৳ 99.00</div> --}}
                                            </div>
                                        </div>
                                        <div class="hed_f2" style="margin:10px 0px;">
                                            <div class="shipp" style="color:black;">Shipping </div>
                                            <div class="flatr right_al">
                                                <div class="flatr1">
                                                    <span style="color:var(--orange)" id="shipCharge">৳ 00</span>
                                                </div>
                                                {{-- <div class="flatr2" style="font-weight:bold;">৳ 99.00</div> --}}
                                            </div>
                                        </div>
                                        <div class="hed_f3">
                                            <div class="total_sh c_p_final">Total</div>
                                            <div class="c_p_final right_al" id="totalVal"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <br>
                <div class="payment_method">
                    <strong style="font-size:20px;">Payment method</strong>
                    <br>
                    <br>
                    <div class="payment_box">
                        <div class="payment_head1 show_pay_height_toggle" id="payment_head1">
                            <div class="pay_flex_part">
                                <div class="form-check padding_top_pm">
                                    <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefault_payment" onclick="checkTestPayment(this)" checked>
                                    <label class="form-check-label" for="flexCheckDefault_payment" style="cursor:pointer;user-select:none;">
                                        ShurjoPay
                                    </label>
                                </div>
                                <div class="pay_img padding_left_pm">
                                    <img src="https://greenshopbd.com/wp-content/plugins/shurjoPay/template/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="pay_slogan" style="padding-left:20px;color:var(--text);user-select:none;">
                                Pay securely using ShurjoPay
                            </div>
                        </div>
                        <div class="payment_head2" id="payment_head2">
                            <div class="form-check padding_top_pm">
                                <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefault_payment1" onclick="checkTestPayment(this)">
                                <label class="form-check-label" for="flexCheckDefault_payment1" style="cursor:pointer;user-select:none;">
                                    Cash on delivery
                                </label>
                            </div>
                            <div class="pay_slogan" style="padding-left:20px;color:var(--text);">
                                Pay with cash upon delivery.
                            </div>
                        </div>
                        <div class="payment_head3" id="payment_head3">
                            <div class="form-check padding_top_pm">
                                <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefault_payment2" onclick="checkTestPayment(this)">
                                <label class="form-check-label" for="flexCheckDefault_payment2" style="cursor:pointer;">
                                    sManager Online Payment
                                </label>
                            </div>
                            <div class="pay_slogan" style="padding-left:10px;">
                                <img src="https://greenshopbd.com/wp-content/plugins/payment-gateway-smanager/assets/img/smanager.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href=""><span style="cursor:pointer;">privacy policy</span></a>.</p>

                <div class="terms_and_condition" id="terms_and_condition">
                    <strong style="color:var(--text);font-size:14px;">TERMS AND CONDITIONS</strong><br><br>
                    <strong style="font-size:14px;color:var(--text);">Privacy Policy</strong>
                    <p>We, at greenshopbd.com, value the trust you place in us. That’s why we insist upon the highest standards for secure transactions and customer information privacy. Please read the following statement to learn about our information gathering and dissemination practices.</p>
                    <p>Note:</p>
                    <p>Our privacy policy is subject to change at any time without notice. To make sure you are aware of any changes, please review this policy periodically.</p>
                    <p>By visiting this Website you agree to be bound by the terms and conditions of this Privacy Policy. If you do not agree please do not use or access our Website.</p>
                    <p>By mere use of the Website, you expressly consent to our use and disclosure of your personal information in accordance with this Privacy Policy. This Privacy Policy is incorporated into and subject to the Terms of Use.</p>
                    <div class="terms_2">
                        <div class="terms_2_h" style="padding-left:20px;">
                            1. <strong style="color:var(--text);">Collection of Personally Identifiable Information and other Information</strong>
                        </div>
                        <p>When you use our Website, we collect and store your personal information which is provided by you from time to time. Our primary goal in doing so is to provide you with a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our Website to make your experience safer and easier. More importantly, while doing so we collect personal information from you that we consider necessary for achieving this purpose.</p>
                        <p>In general, you can browse the Website without telling us who you are or revealing any personal information about yourself. Once you give us your personal information, you are not anonymous to us. Where possible, we indicate which fields are required and which fields are optional. You always have the option to not provide information by choosing not to use a particular service or feature on the Website. We may automatically track certain information about you based on your behaviour on our Website. We use this information to do internal research on our users’ demographics, interests, and behavior to better understand, protect, and serve our users. This information is compiled and analysed on an aggregated basis. This information may include the URL that you just came from (whether this URL is on our Website or not), which URL you next go to (whether this URL is on our Website or not), your computer browser information, and your IP address.</p>
                        <p>We use data collection devices such as “cookies” on certain pages of the Website to help analyze our web page flow, measure promotional effectiveness, and promote trust and safety. “Cookies” are small files placed on your hard drive that assist us in providing our services. We offer certain features that are only available through the use of a “cookie”. We also use cookies to allow you to enter your password less frequently during a session. Cookies can also help us provide information that is targeted to your interests. Most cookies are “session cookies,” meaning that they are automatically deleted from your hard drive at the end of a session. You are always free to decline our cookies if your browser permits, although in that case, you may not be able to use certain features on the Website and you may be required to re-enter your password more frequently during a session.</p>
                        <p>Additionally, you may encounter “cookies” or other similar devices on certain pages of the Website that are placed by third parties. We do not control the use of cookies by third parties.</p>
                        <p>If you choose to buy on the Website, we collect information about your buying behavior.</p>
                        <p>If you transact with us, we collect some additional information, such as a billing address, a credit/debit card number and a credit/debit card expiration date and/ or other payment instrument details and tracking information from cheques or money orders.</p>
                        <p>If you choose to post messages on our message boards, chat rooms or other message areas or leave feedback, we will collect that information you provide to us. We retain this information as necessary to resolve disputes, provide customer support and troubleshoot problems as permitted by law.</p>
                        <p>If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect such information into a file specific to you.</p>
                        <p>We collect personally identifiable information (email address, name, phone number, credit card/debit card / other payment instrument details, etc.) from you when you set up a free account with us. While you can browse some sections of our Website without being a registered member, certain activities (such as placing an order) do require registration. We do use your contact information to send you offers based on your previous orders and your interests.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            2. <strong style="color:var(--text);">Use of Demographic / Profile Data / Your Information</strong>
                        </div>
                        <p>We use personal information to provide the services you request. To the extent we use your personal information to market to you, we will provide you with the ability to opt-out of such uses. We use your personal information to resolve disputes; troubleshoot problems; help promote a safe service; collect money; measure consumer interest in our products and services, inform you about online and offline offers, products, services, and updates; customize your experience; detect and protect us against error, fraud, and other criminal activity; enforce our terms and conditions; and as otherwise described to you at the time of collection.</p>
                        <p>In our efforts to continually improve our product and service offerings, we collect and analyze demographic and profile data about our users’ activity on our Website.</p>
                        <p>We identify and use your IP address to help diagnose problems with our server and to administer our Website. Your IP address is also used to help identify you and to gather broad demographic information.</p>
                        <p>We will occasionally ask you to complete optional online surveys. These surveys may ask you for contact information and demographic information (like zip code, age, or income level). We use this data to tailor your experience to our Website, providing you with content that we think you might be interested in and to display content according to your preferences.</p>
                        <p><strong style="color:var(--text);">Cookies</strong></p>
                        <p>A “cookie” is a small piece of information stored by a web server on a web browser so it can be later read back from that browser. Cookies are useful for enabling the browser to remember information specific to a given user. We place both permanent and temporary cookies on your computer’s hard drive. The cookies do not contain any of your personally identifiable information.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            3. <strong style="color:var(--text);">Sharing of personal information</strong>
                        </div>
                        <p>We may share personal information with our other corporate entities and affiliates. These entities and affiliates may market to you as a result of such sharing unless you explicitly opt-out.</p>
                        <p>We may disclose personal information to third parties. This disclosure may be required for us to provide you access to our Services, to comply with our legal obligations, to enforce our User Agreement, to facilitate our marketing and advertising activities, or to prevent, detect, mitigate, and investigate fraudulent or illegal activities related to our Services. We do not disclose your personal information to third parties for their marketing and advertising purposes without your explicit consent.</p>
                        <p>We may disclose personal information if required to do so by law or in the good faith belief that such disclosure is reasonably necessary to respond to subpoenas, court orders, or other legal processes. We may disclose personal information to law enforcement offices, third party rights owners, or others in the good faith belief that such disclosure is reasonably necessary to: enforce our Terms or Privacy Policy; respond to claims that an advertisement, posting or other content violates the rights of a third party; or protect the rights, property or personal safety of our users or the general public.</p>
                        <p>We and our affiliates will share/sell some or all of your personal information with another business entity should we (or our assets) plan to merge with, or be acquired by that business entity, or re-organization, amalgamation, restructuring of the business. Should such a transaction occur that other business entity (or the new combined entity) will be required to follow this privacy policy with respect to your personal information.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            4. <strong style="color:var(--text);">Links to Other Sites</strong>
                        </div>
                        <p>Our Website links to other websites that may collect personally identifiable information about you. Greenshopbd.com is not responsible for the privacy practices or the content of those linked websites.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            5. <strong style="color:var(--text);">Security Precautions</strong>
                        </div>
                        <p>Our Website has stringent security measures in place to protect the loss, misuse, and alteration of the information under our control. Whenever you change or access your account information, we offer the use of a secure server. Once your information is in our possession we adhere to strict security guidelines, protecting it against unauthorized access.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            6. <strong style="color:var(--text);">Choice/Opt-Out</strong>
                        </div>
                        <p>We provide all users with the opportunity to opt-out of receiving non-essential (promotional, marketing-related) communications from us on behalf of our partners, and from us in general, after setting up an account.</p>
                        <p>If you want to remove your contact information from all Greenshopbd.com lists and newsletters, please visit unsubscribe</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            7. <strong style="color:var(--text);">Advertisements on Greenshopbd.com</strong>
                        </div>
                        <p>We use third-party advertising companies to serve ads when you visit our Website. These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other websites in order to provide advertisements about goods and services of interest to you.</p>
                        <div class="terms_2_h" style="padding-left:20px;">
                            8. <strong style="color:var(--text);">Your Consent</strong>
                        </div>
                        <p>By using the Website and/ or by providing your information, you consent to the collection and use of the information you disclose on the Website in accordance with this Privacy Policy, including but not limited to Your consent for sharing your information as per this privacy policy.</p>
                        <p>If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it.</p>
                    </div>
                </div>

                <div class="form-check" style="display:inline-block;">
                    <input class="form-check-input custom_checkbar" type="checkbox" value="" id="flexCheckDefaultch" checked>
                    <label class="form-check-label" for="flexCheckDefaultch">
                        I have read and agree to the website
                    </label>
                </div>
                <div id="terms_ac" style="display:inline;color:var(--orange);cursor:pointer;margin-top:10px;">terms and conditions *</div>
                <br>
                <div class="place_button">Place order</div>
                <br>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('laraecomm/alljs/checkout.js')}}"></script>




<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('laraecomm/alljs/checkout2.js')}}"></script>

@endsection