@extends('layout.master')
@section('title', 'Member Profile')
@section('parentPageTitle', 'User')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings">Settings</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#event">Follow the MOM Academy
                            Event <span class="badge badge-warning">1</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#course">Follow the MOM
                            Academy Course <span class="badge badge-warning">2</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#job">Get an MOM
                            Academy Job <span class="badge badge-warning">2</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <div class="tab-pane active" id="Settings">

                    <div class="body">
                        <h6>Profile Photo</h6>
                        <div class="media photo">
                            <div class="media-left m-r-15">
                                <img src="../assets/img/sm/avatar1.jpg" class="user-photo media-object" alt="User">
                            </div>
                            <div class="media-body">
                                <p>Upload your photo.
                                    <br> <em>Image should be at least 140px x 140px</em>
                                </p>
                                <button type="button" class="btn btn-default-dark" id="btn-upload-photo">Upload
                                    Photo</button>
                                <input type="file" id="filePhoto" class="sr-only">
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <h6>Basic Information</h6>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label class="fancy-radio">
                                            <input name="gender2" value="male" type="radio" checked>
                                            <span><i></i>Male</span>
                                        </label>
                                        <label class="fancy-radio">
                                            <input name="gender2" value="female" type="radio">
                                            <span><i></i>Female</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-calendar"></i></span>
                                        </div>
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control"
                                            placeholder="Birthdate">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="http://">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address Line 1">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address Line 2">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="State/Province">
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">-- Select Country --</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia, Plurinational State of</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, the Democratic Republic of the</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Côte d'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curaçao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin (French part)</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.S.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>

                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <h6>Account Data</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="alizeethomas" disabled
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" value="alizee.info@yourdomain.com"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <h6>Change Password</h6>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Current Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm New Password">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                        <button class="btn btn-default">Cancel</button>
                    </div>

                    <div class="body">
                        <h6>General Information</h6>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>


                            </div>

                        </div>
                        <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                        <button class="btn btn-default">Cancel</button>
                    </div>
                </div>

                <div class="tab-pane" id="event">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                                        <thead>
                                            <tr>
                                                <th>Poster</th>
                                                <th>Event Name</th>
                                                <th>Venue</th>
                                                <th>Date</th>
                                                <th>Event Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><a href="{{route('users.detailmember')}}"><img
                                                            src="https://instagram.fcgk8-2.fna.fbcdn.net/v/t51.2885-15/e35/176096388_493522018662561_5101618793757264593_n.jpg?tp=1&_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&_nc_cat=109&_nc_ohc=1x63f9EOgUEAX-HFlkf&edm=AP_V10EAAAAA&ccb=7-4&oh=72eaf9f5cccd00a225755c280da1cf13&oe=60802748&_nc_sid=4f375e"
                                                            height="100" alt="">

                                                    </a>
                                                </td>
                                                <td>Upcycle pakaian lama jadi lebih fashionable</td>
                                                <td>Zoom</td>
                                                <td>2011/04/25</td>
                                                <td>Free</td>
                                                <td class="actions">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                                        data-toggle="tooltip" data-original-title="Save" hidden><i
                                                            class="icon-drawer" aria-hidden="true"></i></a>
                                                        <button
                                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                                            data-toggle="tooltip" data-original-title="Discard"
                                                            hidden><i class="icon-close" aria-hidden="true"></i></a>
                                                            <button
                                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                                data-toggle="tooltip" data-original-title="Edit"><i
                                                                    class="icon-pencil" aria-hidden="true"></i></a>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                                    data-toggle="tooltip"
                                                                    data-original-title="Remove"><i class="icon-trash"
                                                                        aria-hidden="true"></i></a>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="tab-pane" id="course">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                                        <thead>
                                            <tr>
                                                <th>Poster</th>
                                                <th>Course Name</th>
                                                <th>Venue</th>
                                                <th>Date</th>
                                                <th>Course Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><a href="{{route('users.detailmember')}}"><img
                                                            src="https://instagram.fcgk9-2.fna.fbcdn.net/v/t51.2885-15/e35/164116770_467548431100084_222231846580775356_n.jpg?tp=1&_nc_ht=instagram.fcgk9-2.fna.fbcdn.net&_nc_cat=104&_nc_ohc=0RWUsLlqomkAX9nMYSV&edm=AP_V10EAAAAA&ccb=7-4&oh=963e0aea14d346ea20f2be3e7bd47594&oe=60A290A2&_nc_sid=4f375e"
                                                            height="100" alt="">

                                                    </a>
                                                </td>
                                                <td>Wanita dalam keluarga dan Islam</td>
                                                <td>Zoom</td>
                                                <td>2011/04/25</td>
                                                <td>Premium</td>
                                                <td class="actions">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                                        data-toggle="tooltip" data-original-title="Save" hidden><i
                                                            class="icon-drawer" aria-hidden="true"></i></a>
                                                        <button
                                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                                            data-toggle="tooltip" data-original-title="Discard"
                                                            hidden><i class="icon-close" aria-hidden="true"></i></a>
                                                            <button
                                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                                data-toggle="tooltip" data-original-title="Edit"><i
                                                                    class="icon-pencil" aria-hidden="true"></i></a>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                                    data-toggle="tooltip"
                                                                    data-original-title="Remove"><i class="icon-trash"
                                                                        aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{route('users.detailmember')}}"><img
                                                            src="https://instagram.fcgk9-2.fna.fbcdn.net/v/t51.2885-15/e35/161029917_193700562176502_1795174812505620467_n.jpg?tp=1&_nc_ht=instagram.fcgk9-2.fna.fbcdn.net&_nc_cat=106&_nc_ohc=uEH49aph3O0AX9osrHD&edm=AP_V10EAAAAA&ccb=7-4&oh=e0068bc4d5346caf712c242c23d59ca8&oe=60A1F44D&_nc_sid=4f375e"
                                                            height="100" alt="">

                                                    </a>
                                                </td>
                                                <td>Strategi Promosi Menarik dengan ...</td>
                                                <td>Zoom</td>
                                                <td>2011/04/25</td>
                                                <td>Free</td>
                                                <td class="actions">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                                        data-toggle="tooltip" data-original-title="Save" hidden><i
                                                            class="icon-drawer" aria-hidden="true"></i></a>
                                                        <button
                                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                                            data-toggle="tooltip" data-original-title="Discard"
                                                            hidden><i class="icon-close" aria-hidden="true"></i></a>
                                                            <button
                                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                                data-toggle="tooltip" data-original-title="Edit"><i
                                                                    class="icon-pencil" aria-hidden="true"></i></a>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                                    data-toggle="tooltip"
                                                                    data-original-title="Remove"><i class="icon-trash"
                                                                        aria-hidden="true"></i></a>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="job">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                                        <thead>
                                            <tr>
                                                <th>Poster</th>
                                                <th>Job Name</th>
                                                <th>Date</th>
                                                <th>Rating</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot> -->
                                        <tbody>
                                            <tr>
                                                <td><a href="{{route('users.detailmember')}}"><img
                                                            src="{{asset('assets/img/job1.jpg')}}" height="100" alt="">

                                                    </a>
                                                </td>
                                                <td>Sosmed Spesialist</td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <div class="rate">
                                                        <input type="radio" id="star5" name="rate" value="5" />
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input type="radio" id="star4" name="rate" value="4" />
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" name="rate" value="3" />
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" name="rate" value="2" />
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" name="rate" value="1" />
                                                        <label for="star1" title="text">1 star</label>
                                                    </div>
                                                </td>
                                                <td class="actions">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                                        data-toggle="tooltip" data-original-title="Save" hidden><i
                                                            class="icon-drawer" aria-hidden="true"></i></a>
                                                        <button
                                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                                            data-toggle="tooltip" data-original-title="Discard"
                                                            hidden><i class="icon-close" aria-hidden="true"></i></a>
                                                            <button
                                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                                data-toggle="tooltip" data-original-title="Edit"><i
                                                                    class="icon-pencil" aria-hidden="true"></i></a>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                                    data-toggle="tooltip"
                                                                    data-original-title="Remove"><i class="icon-trash"
                                                                        aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{route('users.detailmember')}}"><img
                                                            src="{{asset('assets/img/job2.jpg')}}" height="100" alt="">

                                                    </a>
                                                </td>
                                                <td>Talent Video</td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <div class="rate">
                                                        <input type="radio" id="star5" name="rate" value="5" />
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input type="radio" id="star4" name="rate" value="4" />
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" name="rate" value="3" />
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" name="rate" value="2" />
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" name="rate" value="1" />
                                                        <label for="star1" title="text">1 star</label>
                                                    </div>
                                                </td>
                                                <td class="actions">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                                        data-toggle="tooltip" data-original-title="Save" hidden><i
                                                            class="icon-drawer" aria-hidden="true"></i></a>
                                                        <button
                                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                                            data-toggle="tooltip" data-original-title="Discard"
                                                            hidden><i class="icon-close" aria-hidden="true"></i></a>
                                                            <button
                                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                                data-toggle="tooltip" data-original-title="Edit"><i
                                                                    class="icon-pencil" aria-hidden="true"></i></a>
                                                                <button
                                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                                    data-toggle="tooltip"
                                                                    data-original-title="Remove"><i class="icon-trash"
                                                                        aria-hidden="true"></i></a>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@stop

@section('page-script')

$(function() {
// photo upload
$('#btn-upload-photo').on('click', function() {
$(this).siblings('#filePhoto').trigger('click');
});

// plans
$('.btn-choose-plan').on('click', function() {
$('.plan').removeClass('selected-plan');
$('.plan-title span').find('i').remove();

$(this).parent().addClass('selected-plan');
$(this).parent().find('.plan-title').append('<span><i class="fa fa-check-circle"></i></span>');
});
});

@stop