
<style type="text/css">
    .margin-input {
        padding-left: 150px;
        padding-right: 150px;
        margin-bottom: 10px;
    }
    .margin-input h3 {
        font-size: 12px;
        padding-left: 8px;
        color: #5f5f5f;
    }
    .format-form {
        font-weight: 600;
        font-size: 12px !important;
        color: #000 !important;
    }
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #000;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }
    input:focus {   
        border-color: rgba(162, 145, 135, 0.8);
        box-shadow: 0 1px 1px rgba(140, 125, 116, 0.075) inset, 0 0 8px rgba(148, 134, 126, 0.6);
        outline: 0 none;
    }
    input[type="text"] {
        border: none;
        border-bottom: 0.5px solid #000;
        margin-bottom: 30px !important;
    }
    input[type="email"] {
        border: none;
        border-bottom: 0.5px solid #000;
        margin-bottom: 30px !important;
    }
    select#country2 {
        border: none;
        border-bottom: 0.5px solid #000;
        padding-left: 0px !important;
        margin-bottom: 10px !important;
        padding-bottom: 2px !important;
    }
    textarea.format-form {
        border: 0.5px solid #000;
        margin-bottom: 10px !important;
    }
    .your-message {
        text-transform: uppercase;
        font-weight: 600;
        font-size: 12px !important;
        color: #000 !important;
        padding-left: 5px;
        margin-bottom: 0px;
        letter-spacing: 0.5px;
    }
    #contact-form-page textarea {
        height: 100px;
    }
    #contactby {
        border-bottom: 0.5px solid #000;
        margin-bottom: 5px;
        padding-bottom: 4px;
        margin-left: 5px;
        padding-left: 0;
        width: 99%;
    }
    #contactby label {
        letter-spacing: 1px;
        color: #000;
        font-size: 12px;
    }
    input[type="radio"], input#contactbyemail {
        margin: 1px;
        width: 20px;
        cursor: pointer;
    } 
    input[type="radio"], input#contactbyphone {
        margin: 1px;
        width: 20px;
        cursor: pointer;
    } 
    input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus {
        background: none;
        box-shadow: none;
    }

    li.parsley-required {
        letter-spacing: 1px;
        font-size: 11px;
        margin-bottom: 2px;
        padding-left: 4px;
        color: #A58A62;
    }
    input#contact-tag {
        background: #000;
        border: none;
        color: #FFF;
        padding: 8px;
        letter-spacing: 1px;
    }
    @media (min-width: 320px) and (max-width: 700px) {
        .margin-input {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
        #contactby {
            width: 97.2%;
        }
    }
    @media (min-width: 700px) and (max-width: 1250px) {
        .margin-input {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
        #contactby {
            width: 99%;
        }
    }
</style>

<form id="contact-form-page" data-parsley-validate action="includes/process/process-contact-us.php" method="post" class="col-sm-12 col-xs-12 col-md-12 col-lg-12 nopadding" style="margin-top: 25px;">

        <input type="hidden" name="origin" class="origin"/>
        <input type="hidden" name="referrer" class="referrer"/>
        <input type="hidden" name="lead_path" class="lead_path"/>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-input">
            
            <h3>You prefer to be contacted by:</h3>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="contactby">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4" style="float: left; display: flex; margin-top: 5px;">
                  <label for="contactbyemail">EMAIL</label>
                  <input type="checkbox" id="contactbyemail" name="contactby" value="Email" checked required>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="float: left; display: flex; margin-top: 5px;">
                  <label for="contactbyphone">PHONE NUMBER</label>
                  <input type="checkbox" id="contactbyphone" name="contactby" value="Phone" required>
                </div>
            </div>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-input">
            
            <h3>Tell us who you are</h3>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input class="format-form" data-parsley-trigger="change" required type="text" name="firstname" placeholder="First Name*" onblur="if (this.placeholder === '') { this.placeholder = 'First Name*';}" onfocus="if (this.placeholder === 'First Name*') { this.placeholder = '';}" /><br/>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input class="format-form" data-parsley-trigger="change" required type="text" name="lastname" placeholder="Last Name*" onblur="if (this.placeholder === '') { this.placeholder = 'Last Name*';}" onfocus="if (this.placeholder === 'Last Name*') { this.placeholder = '';}" /><br/>
            </div>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-input">
                
            <h3>Tell us how to reach you</h3>    

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input class="format-form" data-parsley-trigger="change" required parsley-type="email" type="email" name="email" placeholder="Email*" onblur="if (this.placeholder === '') { this.placeholder = 'Email*';}" onfocus="if (this.placeholder === 'Email*') { this.placeholder = '';}" /><br/>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input class="format-form" data-parsley-trigger="change" required type="text" name="phone" placeholder="Phone Number*" onblur="if (this.placeholder === '') { this.placeholder = 'Phone Number*';}" onfocus="if (this.placeholder === 'Phone Number*') { this.placeholder = '';}" /><br/>
            </div>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-input">
            
            <h3>Tell us where you're from</h3>  

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input class="format-form" data-parsley-trigger="change" required type="text" name="address" placeholder="Address*" onblur="if (this.placeholder === '') { this.placeholder = 'Address*';}" onfocus="if (this.placeholder === 'Address*') { this.placeholder = ''; }" /><br/>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <select class="format-form" data-parsley-trigger="change" required name="country" id="country2">
                    <option class="format-form" selected="" disabled="" value="">COUNTRY*</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia, Plurinational State of</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, The Democratic Republic of the">Congo, The Democratic Republic of the</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Côte D'ivoire">Côte D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaçao">Curaçao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Réunion">Réunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Barthélemy">Saint Barthélemy</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Martin">Saint Martin</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
              </select>

              <div id="statewrapper2" class="statewrapper2" hidden="hidden" >
                    <select data-parsley-trigger="change" class="form-control" name="state" id="selectState" required>
                      <option selected="" value="" disabled="">PLEASE SELECT STATTE (USA ONLY)</option>
                      <option value="Alabama">Alabama</option>
                      <option value="Alaska">Alaska</option>
                      <option value="Arizona">Arizona</option>
                      <option value="Arkansas">Arkansas</option>
                      <option value="California">California</option>
                      <option value="Colorado">Colorado</option>
                      <option value="Connecticut">Connecticut</option>
                      <option value="Delaware">Delaware</option>
                      <option value="District Of Columbia">District Of Columbia</option>
                      <option value="Florida">Florida</option>
                      <option value="Georgia">Georgia</option>
                      <option value="Guam">Guam</option>
                      <option value="Hawaii">Hawaii</option>
                      <option value="Idaho">Idaho</option>
                      <option value="Illinois">Illinois</option>
                      <option value="Indiana">Indiana</option>
                      <option value="Iowa">Iowa</option>
                      <option value="Kansas">Kansas</option>
                      <option value="Kentucky">Kentucky</option>
                      <option value="Legal Forms">Legal Forms</option>
                      <option value="Louisiana">Louisiana</option>
                      <option value="Maine">Maine</option>
                      <option value="Maryland">Maryland</option>
                      <option value="Massachusetts">Massachusetts</option>
                      <option value="Michigan">Michigan</option>
                      <option value="Minnesota">Minnesota</option>
                      <option value="Mississippi">Mississippi</option>
                      <option value="Missouri">Missouri</option>
                      <option value="Montana">Montana</option>
                      <option value="Nebraska">Nebraska</option>
                      <option value="Nevada">Nevada</option>
                      <option value="New Hampshire">New Hampshire</option>
                      <option value="New Jersey">New Jersey</option>
                      <option value="New Mexico">New Mexico</option>
                      <option value="New York">New York</option>
                      <option value="North Carolina">North Carolina</option>
                      <option value="North Dakota">North Dakota</option>
                      <option value="Official Federal Forms">Official Federal Forms</option>
                      <option value="Ohio">Ohio</option>
                      <option value="Oklahoma">Oklahoma</option>
                      <option value="Oregon">Oregon</option>
                      <option value="Pennsylvania">Pennsylvania</option>
                      <option value="Puerto Rico">Puerto Rico</option>
                      <option value="Rhode Island">Rhode Island</option>
                      <option value="South Carolina">South Carolina</option>
                      <option value="South Dakota">South Dakota</option>
                      <option value="Tennessee">Tennessee</option>
                      <option value="Texas">Texas</option>
                      <option value="Utah">Utah</option>
                      <option value="Vermont">Vermont</option>
                      <option value="Virginia">Virginia</option>
                      <option value="Washington">Washington</option>
                      <option value="West Virginia">West Virginia</option>
                      <option value="Wisconsin">Wisconsin</option>
                      <option value="Wyoming">Wyoming</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-input">

            <h3>Tell us what you need</h3>  

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="your-message">YOUR MESSAGE</p>
                <textarea class="format-form" data-parsley-trigger="change" type="text" name="message"></textarea><br/>
            </div>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-input">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 submit-loading">
                <input type="hidden" name="isSubmitted" value="1"/>
                <input type="submit" id="contact-tag" name="submit" alt="submit" value="SEND MESSAGE"/>
                <!-- <i class="fas fa-circle-notch fa-spin"></i> -->
            </div>

        </div>

</form>


