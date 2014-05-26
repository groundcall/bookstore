<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>MyBooks</title>
        <meta name="description" content="Default Description" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
        <link rel="stylesheet" type="text/css" href="css/widgets.css" media="all" />
        <script type="text/javascript" src="js/prototype/prototype.js"></script>
    </head>

    <body>

        <div class="wrapper">
            <div class="page">
                
                <?php $view->render('users/user_navigation'); ?>
                
                <div class="main-container col2-right-layout">
                    <div class="main">
                        <div class="col-main">
                            <div class="page-title">
                                <h1>Checkout</h1>
                            </div>
                            <ol class="opc" id="checkoutSteps">
                                <li id="opc-billing" class="section slide2 allow active">
                                    <div class="step-title">
                                        <span class="number">1</span>
                                        <h2>Billing Information</h2>
                                        <a href="#">Edit</a>
                                    </div>
                                    <div id="checkout-step-billing" class="step a-item">
                                        <form id="co-billing-form" action="">
                                            <fieldset>
                                                <ul class="form-list">
                                                    <li id="billing-new-address-form">
                                                        <fieldset>
                                                            <input name="billing[address_id]" value="" id="billing:address_id" type="hidden">
                                                                <ul>
                                                                    <li class="fields">
                                                                        <div class="customer-name">
                                                                            <div class="field name-firstname">
                                                                                <label for="billing:firstname" class="required"><em>*</em>First Name</label>
                                                                                <div class="input-box">
                                                                                    <input id="billing:firstname" name="billing[firstname]" title="First Name" maxlength="255" class="input-text required-entry" type="text">
                                                                                </div>
                                                                            </div>
                                                                            <div class="field name-lastname">
                                                                                <label for="billing:lastname" class="required"><em>*</em>Last Name</label>
                                                                                <div class="input-box">
                                                                                    <input id="billing:lastname" name="billing[lastname]" title="Last Name" maxlength="255" class="input-text required-entry" type="text">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="fields">
                                                                        <div class="field">
                                                                            <label for="billing:email" class="required"><em>*</em>Email Address</label>
                                                                            <div class="input-box">
                                                                                <input name="billing[email]" id="billing:email" title="Email Address" class="input-text validate-email required-entry" type="text">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="wide">
                                                                        <label for="billing:street1" class="required"><em>*</em>Address</label>
                                                                        <div class="input-box">
                                                                            <input title="Street Address" name="billing[street][]" id="billing:street1" class="input-text  required-entry" type="text">
                                                                        </div>
                                                                    </li>
                                                                    <li class="wide">
                                                                        <div class="input-box">
                                                                            <input title="Street Address 2" name="billing[street][]" id="billing:street2" class="input-text " type="text">
                                                                        </div>
                                                                    </li>
                                                                    <li class="fields">
                                                                        <div class="field">
                                                                            <label for="billing:city" class="required"><em>*</em>City</label>
                                                                            <div class="input-box">
                                                                                <input title="City" name="billing[city]" class="input-text  required-entry" id="billing:city" type="text">
                                                                            </div>
                                                                        </div>
                                                                        <div class="field">
                                                                            <label for="billing:country_id" class="required"><em>*</em>Country</label>
                                                                            <div class="input-box">
                                                                                <select name="billing[country_id]" id="billing:country_id" class="validate-select" title="Country"><option value=""> </option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos [Keeling] Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo - Brazzaville</option><option value="CD">Congo - Kinshasa</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Côte d’Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong SAR China</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau SAR China</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar [Burma]</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="KP">North Korea</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territories</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">São Tomé and Príncipe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="KR">South Korea</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US" selected="selected">United States</option><option value="UY">Uruguay</option><option value="UM">U.S. Minor Outlying Islands</option><option value="VI">U.S. Virgin Islands</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>                        </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="no-display"><input name="billing[save_in_address_book]" value="1" type="hidden"></li>
                                                                </ul>
                                                        </fieldset>
                                                    </li>
                                                    <li class="control">
                                                        <input name="billing[use_for_shipping]" id="billing:use_for_shipping_yes" value="1" checked="checked" title="Ship to this address" class="radio" type="radio" />
                                                        <label for="billing:use_for_shipping_yes">Ship to this address</label>
                                                    </li>
                                                    <li class="control">
                                                        <input name="billing[use_for_shipping]" id="billing:use_for_shipping_no" value="0" title="Ship to different address" class="radio" type="radio">
                                                            <label for="billing:use_for_shipping_no">Ship to different address</label>
                                                    </li>
                                                </ul>
                                                <div class="buttons-set" id="billing-buttons-container">
                                                    <p class="required">* Required Fields</p>
                                                    <button type="button" title="Continue" class="button" onclick="window.location = '/checkout_shipping.html'"><span><span>Continue</span></span></button>
                                                </div>
                                            </fieldset>
                                        </form>

                                    </div>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>

                <div class="footer-container">
                    <?php $view->render('users/user_footer'); ?>
                </div>
            </div>

    </body>
</html>
