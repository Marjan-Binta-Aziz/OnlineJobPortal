@extends('user.master')

@section('content')
<div class="content-wrapper">
    <div class="single-head">
  <div class="page">
    <div class="navbar-expand-md">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
          <div class="container-xl">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('user.showuserprofile')}}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Home
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Manage Profile
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cards">
      <div class="col-md-12">
        <form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-header">
            <h4 class="card-title">User Profile</h4>
          </div>
        </div>
            <div id="alertDiv_per"></div>
          <div class="card-body">
            <div class="col-md-12">
              <div class="row">
                    <div class="form-group col-md-6">
                      <label for="" class="form-label required">First name</label>
                      <input type="text" class="form-control aria-disabled" id="" maxlength="50" name="f_name" id="" autocomplete="off"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="" class="form-label required">Last Name</label>
                      <input type="text" class="form-control aria-disabled"  name="lname" id="" autocomplete="off"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="" class="form-label required">Father's Name</label>
                      <input type="text" class="form-control aria-disabled"  name="father" id="" autocomplete="off"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="" class="form-label required">Mother's Name</label>
                      <input type="text" class="form-control aria-disabled"  name="mother" id="" autocomplete="off"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="" class="form-label required">Date of Birth</label>
                      <input type="date" class="form-control aria-disabled"  name="dob" id="" autocomplete="off"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="" class="form-label required">Gender</label>
                      <select name="sex" id="" class="form-control aria-disabled">
                        <option value="-1" selected="">Select</option>
                        <option value="M">Male</option>
                        <option value="F" >Female</option>
                        <option value="O">Others</option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Religion</label>
                      <select name="religion" id="" class="btn-form-control form-control aria-disabled" onchange="changeReligionView()">
                          <option value="-1">Select</option>
                          <option value="Buddhism">Buddhism</option>
                          <option value="Christianity">Christianity</option>
                          <option value="Hinduism">Hinduism</option>
                          <option value="Islam">Islam</option>
                          <option value="Jainism">Jainism</option>
                          <option value="Judaism">Judaism</option>
                          <option value="Sikhism">Sikhism</option>
                          <option value="Others">Others</option>
                      </select>
                  </div>
                    <div class="form-group col-md-6">
                      <label for="" class="form-label required">Marital Status</label>
                      <select name="cboMStatus" id="cboMStatus" class="btn-form-control form-control aria-disabled">
                        <option value="-1" selected="selected">Select</option>
                        <option value="2">Unmarried</option>
                        <option value="1"> Married </option>
                        <option value="3"> Single </option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="" class="form-label required">Nationality</label>
                      <input type="text" class="form-control aria-disabled"  name="country" id="" autocomplete="off"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="" class="form-label required">National Id</label>
                      <input type="text" class="form-control aria-disabled"  name="nid" id="" autocomplete="off"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="" class="form-label">Passport Number</label>
                      <input type="text" class="form-control aria-disabled"  name="passport" id="" autocomplete="off"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Blood Group</label>
                      <span class="onclick-hidden text-tundora yes" id="">
                      </span>
                    <select name="blood" id="" class="btn-form-control form-control aria-disabled" onchange="changeBloodView()">
                          <option value="-1">Select</option>
                          <option value="A+">A(+ve)</option>
                          <option value="A-">A(-ve)</option>
                          <option value="B+">B(+ve)</option>
                          <option value="B-">B(-ve)</option>
                          <option value="O+">O(+ve)</option>
                          <option value="O-">O(-ve)</option>
                          <option value="AB+">AB(+ve)</option>
                          <option value="AB-">AB(-ve)</option>
                      </select>
                  </div>
                    <div class="form-group col-md-6">
                      <label for="txtMobile" class="sui">Phone Number
                          <small class="btn-form-control color-green">(Provide Valid Phone Number)</small>
                          <span class="help-block" id="txtMob1ErrorMsg"></span>
                      </label>
                          <div class="row">
                              <div class="col-sm-6 cl-pr" id="">
                                  <select aria-label="select country" name="" id="" required="required" class="form-control from-control-login aria-disabled">
                                      <!-- <option value="-1">Select</option> -->
                                          <option value="93">Afghanistan (93)</option><option value="355">Albania (355)</option><option value="213">Algeria (213)</option><option value="376">Andorra (376)</option><option value="244">Angola (244)</option><option value="264">Anguilla (264)</option><option value="672">Antarctica (672)</option><option value="268">Antigua (268)</option>
                                          <option value="54">Argentina (54)</option><option value="374">Armenia (374)</option><option value="297">Aruba (297)</option><option value="61">Australia (61)</option>
                                          <option value="43">Austria (43)</option><option value="994">Azerbaijan (994)</option><option value="242">Bahamas (242)</option><option value="973">Bahrain (973)</option><option value="88" selected="">Bangladesh (88)</option><option value="246">Barbados (246)</option><option value="375">Belarus (375)</option>
                                          <option value="32">Belgium (32)</option><option value="501">Belize (501)</option><option value="229">Benin (229)</option><option value="441">Bermuda (441)</option><option value="975">Bhutan (975)</option><option value="591">Bolivia (591)</option><option value="387">Bosnia and Herzegovina (387)</option><option value="267">Botswana (267)</option><option value="55">Brazil (55)</option><option value="284">British Virgin Islands (284)</option><option value="673">Brunei (673)</option><option value="359">Bulgaria (359)</option><option value="226">Burkina Faso (226)</option><option value="257">Burundi (257)</option><option value="855">Cambodia (855)</option><option value="237">Cameroon (237)</option><option value="1">Canada (1)</option><option value="238">Cape Verde (238)</option><option value="236">Central African Republic (236)</option><option value="235">Chad (235)</option><option value="56">Chile (56)</option><option value="86">China (86)</option><option value="57">Colombia (57)</option><option value="269">Comoros (269)</option><option value="242">Congo (242)</option><option value="243">Congo (Zaire) (243)</option><option value="682">Cook Islands (682)</option><option value="506">Costa Rica (506)</option>
                                          <option value="225">Cote d'Ivoire (Ivory Coast) (225)</option><option value="385">Croatia (385)</option><option value="53">Cuba (53)</option><option value="357">Cyprus (357)</option><option value="420">Czech Republic (420)</option>
                                          <option value="45">Denmark (45)</option><option value="253">Djibouti (253)</option><option value="767">Dominica (767)</option><option value="809">Dominican Republic (809)</option><option value="670">East Timor (670)</option><option value="593">Ecuador (593)</option><option value="20">Egypt (20)</option><option value="503">El Salvador (503)</option><option value="240">Equatorial Guinea (240)</option><option value="291">Eritrea (291)</option><option value="372">Estonia (372)</option><option value="251">Ethiopia (251)</option><option value="500">Falkland Islands (500)</option><option value="691">Federated States of Micronesia (691)</option><option value="679">Fiji (679)</option><option value="358">Finland (358)</option><option value="33">France (33)</option>
                                          <option value="594">French Guiana (594)</option><option value="689">French Polynesia (689)</option><option value="241">Gabon (241)</option><option value="995">Georgia (995)</option><option value="49">Germany (49)</option><option value="233">Ghana (233)</option><option value="350">Gibraltar (350)</option><option value="30">Greece (30)</option><option value="299">Greenland (299)</option><option value="473">Grenada (473)</option><option value="590">Guadeloupe (590)</option><option value="502">Guatemala (502)</option><option value="224">Guinea (224)</option><option value="245">Guinea-Bissau (245)</option><option value="592">Guyana (592)</option><option value="509">Haiti (509)</option><option value="504">Honduras (504)</option><option value="852">Hong Kong (852)</option><option value="36">Hungary (36)</option><option value="354">Iceland (354)</option><option value="91">India (91)</option><option value="62">Indonesia (62)</option><option value="98">Iran (98)</option><option value="964">Iraq (964)</option><option value="353">Ireland (353)</option><option value="972">Israel (972)</option><option value="39">Italy (39)</option><option value="876">Jamaica (876)</option><option value="81">Japan (81)</option><option value="962">Jordan (962)</option><option value="7">Kazakhstan (7)</option><option value="254">Kenya (254)</option><option value="686">Kiribati (686)</option><option value="965">Kuwait (965)</option><option value="996">Kyrgyzstan (996)</option><option value="856">Laos (856)</option><option value="371">Latvia (371)</option><option value="961">Lebanon (961)</option><option value="266">Lesotho (266)</option>
                                          <option value="231">Liberia (231)</option><option value="218">Libya (218)</option><option value="423">Liechtenstein (423)</option><option value="370">Lithuania (370)</option><option value="352">Luxembourg (352)</option><option value="853">Macau (853)</option><option value="389">Macedonia (389)</option><option value="261">Madagascar (261)</option><option value="265">Malawi (265)</option><option value="60">Malaysia (60)</option><option value="960">Maldives (960)</option><option value="223">Mali (223)</option><option value="356">Malta (356)</option><option value="692">Marshall Islands (692)</option><option value="596">Martinique (596)</option><option value="222">Mauritania (222)</option><option value="230">Mauritius (230)</option><option value="262">Mayotte (262)</option><option value="52">Mexico (52)</option><option value="373">Moldova (373)</option><option value="377">Monaco (377)</option><option value="976">Mongolia (976)</option><option value="382">Montenegro (382)</option><option value="664">Montserrat (664)</option><option value="212">Morocco (212)</option><option value="258">Mozambique (258)</option><option value="95">Myanmar (95)</option><option value="264">Namibia (264)</option><option value="674">Nauru (674)</option><option value="977">Nepal (977)</option><option value="31">Netherlands (31)</option><option value="599">Netherlands Antilles (599)</option><option value="687">New Caledonia (687)</option><option value="64">New Zealand (64)</option><option value="505">Nicaragua (505)</option><option value="227">Niger (227)</option><option value="234">Nigeria (234)</option><option value="850">North Korea (850)</option><option value="47">Norway (47)</option><option value="968">Oman (968)</option><option value="92">Pakistan (92)</option><option value="680">Palau (680)</option><option value="507">Panama (507)</option><option value="675">Papua New Guinea (675)</option><option value="595">Paraguay (595)</option><option value="51">Peru (51)</option><option value="63">Philippines (63)</option><option value="48">Poland (48)</option><option value="351">Portugal (351)</option><option value="974">Qatar (974)</option><option value="40">Romania (40)</option><option value="7">Russia (7)</option><option value="250">Rwanda (250)</option><option value="869">Saint Kitts and Nevis (869)</option><option value="758">Saint Lucia (758)</option><option value="508">Saint Pierre and Miquelon (508)</option><option value="784">Saint Vincent and the Grenadines (784)</option><option value="685">Samoa (685)</option><option value="378">San Marino (378)</option><option value="239">Sao Tome and Principe (239)</option><option value="966">Saudi Arabia (966)</option><option value="221">Senegal (221)</option><option value="381">Serbia and Montenegro (Yugoslavia) (381)</option><option value="248">Seychelles (248)</option><option value="232">Sierra Leone (232)</option><option value="65">Singapore (65)</option><option value="421">Slovakia (421)</option><option value="386">Slovenia (386)</option><option value="677">Solomon Islands (677)</option><option value="252">Somalia (252)</option><option value="27">South Africa (27)</option><option value="82">South Korea (82)</option><option value="2011">South Sudan (2011)</option><option value="34">Spain (34)</option><option value="94">Sri Lanka (94)</option><option value="249">Sudan (249)</option><option value="597">Suriname (597)</option><option value="268">Swaziland (268)</option><option value="46">Sweden (46)</option><option value="41">Switzerland (41)</option><option value="963">Syria (963)</option><option value="886">Taiwan (886)</option>
                                          <option value="992">Tajikistan (992)</option><option value="255">Tanzania (255)</option><option value="66">Thailand (66)</option><option value="220">The Gambia (220)</option><option value="228">Togo (228)</option><option value="676">Tonga (676)</option><option value="868">Trinidad and Tobago (868)</option><option value="216">Tunisia (216)</option><option value="90">Turkey (90)</option><option value="993">Turkmenistan (993)</option><option value="649">Turks and Caicos Islands (649)</option><option value="688">Tuvalu (688)</option><option value="256">Uganda (256)</option><option value="380">Ukraine (380)</option><option value="971">United Arab Emirates (971)</option><option value="44">United Kingdom (44)</option><option value="1">United States (1)</option><option value="598">Uruguay (598)</option><option value="998">Uzbekistan (998)</option><option value="678">Vanuatu (678)</option><option value="58">Venezuela (58)</option>
                                          <option value="84">Vietnam (84)</option><option value="967">Yemen (967)</option>
                                          <option value="260">Zambia (260)</option><option value="263">Zimbabwe (263)</option>
                                  </select>
                              </div>
                              <div class="col-sm-6 voffset-s">
                                  <input type="tel" class="form-control from-control-login aria-disabled" placeholder="" id="txtMobile" name="txtMobile" value="" maxlength="14" autocomplete="off">
                              </div>
                          </div>
                        </div>
                    <div class="form-group col-md-6">
                      <label for="email" class="form-label required">Email</label>
                      <input type="email" class="form-control"  value="{{ Auth::user()->email }}" id="" autocomplete="off"/>
                      <small class="form-hint">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group mb-6">
                        <label for="" class="form-label required">CV</label>
                        <input type="file" class="form-control" name="file">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div><br>
              </div>
            </div>
            </div>
          </div>
        </form>
      </div>
      </div>
  </div>
</div>
@endsection
