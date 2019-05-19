@extends('layouts.app')

@section('content')
     <section id="all-service" class="section-services">
          <div class="container">
               <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                         <h2>@lang("common.slogan")</h2>
                    </div>
               </div>

               <div class="row text-center" style="margin-bottom: 30px;">
                    <div class="hidden-sm hidden-md col-lg-2"></div>
                    <div class="col-sm-12 col-md-12 col-lg-2 item-services">
                         <i class="material-icons md-48 th-blue">&#xE530;</i>
                         <h3>@lang('common.bus_transport')</h3>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 item-services">

                         <i class="material-icons md-48 th-blue">&#xE558;</i>
                         <h3>@lang('common.goods_transport')</h3>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-2 item-services">
                         <i class="material-icons md-48 th-blue">&#xEB3E;</i>
                         <h3>@lang('common.package_tours')</h3>
                    </div>
                    <div class="hidden-sm hidden-md col-lg-2"></div>
               </div>
          </div>
     </section>

     <!--
     <section id="about-us" class="section-about">
          <div class="container">
            <div class="row content">
               <div class="col-lg-12">
                    <h1>@lang('common.about_us')</h1>
                    <div class="quotes">”</div>
                    <p>Được thành lập từ năm 2005, tuy thời gian hoạt động không lâu, nhưng với sự cố gắng, nỗ lực không ngừng của Ban Giám đốc và toàn thể nhân viên, Công ty chúng tôi đã nhận được sự đánh giá và tín nhiệm cao của khách hàng trong và ngoài nước về các lĩnh vực: kinh doanh lữ hành du lịch nội địa và quốc tế. Công ty chúng tôi đã góp phần không nhỏ vào việc quảng bá, vận chuyển du khách đến các thành phố du lịch đặc biệt là Phan Thiết, @lang('common.nhatrang').. Du lịch <span class="tamhanh">Tâm Hạnh</span> từ lâu đã được khách hàng biết đến là một trong những công ty hàng đầu trong lĩnh vực vận chuyển khách du lịch. Công ty có được thành công ngày hôm nay, ngoài sự cố gắng, nỗ lực không ngừng của lãnh đạo và nhân viên công ty, còn có sự đóng góp to lớn của quý khách hàng.
                    </p>

                    <p>Để đáp lại lời tri ân chân thành nhất, Công ty chúng tôi luôn luôn phấn đấu, tìm kiếm đa dạng các loại hình dịch vụ, phục vụ tối ưu cho khách hàng. Trên tinh thần đó, chúng tôi sẽ mở thêm dịch vụ vận chuyển <b>Hàng hóa - Bưu phẩm - Bưu kiện</b> từ @lang('common.hochiminh') đi Phan Thiết, @lang('common.muine'), @lang('common.nhatrang') và ngược lại.
                    </p>

                    <div class="cauket">Tất cả vì khách hàng, vì sự phát triển bền vững hai bên</div>
               </div>
            </div>
          </div>
     </section>
      -->
     <section id="bus" class="section-bus">
          <div class="container">
               <div class="content">
                    <h2>@lang('common.bus_schedule')</h2>

                    <div class="panel-group" id="accordion">
                          <!--khoi hanh 1 -->
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><h3>@lang('common.departure_from') @lang('common.hochiminh')</h3></a>
                              </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                <div class="block-content">
                                     <div class="row">
                                          <div class="col-lg-3">
                                               <h5>@lang('common.hochiminh') -  @lang('common.phanthiet') / @lang('common.muine')</h5>
                                               <div>Thời gian chạy: 4 tiếng</div>
                                               <div>Tiện ích:</div>
                                               <div>
                                                    <i class="material-icons">&#xE631;</i>
                                                    <i class="material-icons">&#xE063;</i>
                                                    <i class="material-icons">&#xE63E;</i>
                                               </div>

                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AA;</i> @lang('common.morning')</div>
                                               <div class="time-content">
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>7h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>8h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>9h00</span>
                                                    <br>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>10h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>11h00</span>
                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AB;</i> @lang('common.afternoon')</div>
                                               <div class="time-content">
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>12h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>13h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>14h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>15h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>16h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>17h00</span>
                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3A9;</i> @lang('common.night')</div>
                                               <div class="time-content">
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>18h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>19h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>20h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>21h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>22h00</span>
                                               </div>
                                          </div>
                                     </div>

                                     <div class="row">
                                          <div class="col-lg-3">
                                               <h5>@lang('common.hochiminh') - @lang('common.nhatrang')</h5>
                                               <div>Thời gian chạy: 8 tiếng</div>
                                               <div>Tiện ích:</div>
                                               <div>
                                                    <i class="material-icons">&#xE631;</i>
                                                    <i class="material-icons">&#xE063;</i>
                                                    <i class="material-icons">&#xE63E;</i>
                                                    <i class="material-icons">&#xE544;</i>
                                               </div>

                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AA;</i> @lang('common.morning')</div>
                                               <div class="time-content">
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>8h00</span>
                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AB;</i> @lang('common.afternoon')</div>
                                               <div class="time-content">

                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3A9;</i> @lang('common.night')</div>
                                               <div class="time-content">
                                                  <span><i class="material-icons md-18 th-grey">&#xE425;</i>20h30</span>

                                               </div>
                                          </div>
                                     </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!--khoi hanh 2 -->
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><h3>@lang('common.departure_from') @lang('common.phanthiet')</h3></a>
                              </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                              <div class="panel-body">
                                <div class="block-content">
                                     <div class="row">
                                          <div class="col-lg-3">
                                               <h5>@lang('common.phanthiet') - @lang('common.hochiminh')</h5>
                                               <div>Thời gian chạy: 4 tiếng</div>
                                               <div>Tiện ích:</div>
                                               <div>
                                                    <i class="material-icons">&#xE631;</i>
                                                    <i class="material-icons">&#xE063;</i>
                                                    <i class="material-icons">&#xE63E;</i>
                                               </div>

                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AA;</i> @lang('common.morning')</div>
                                               <div class="time-content">

                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>1h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>2h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>3h00</span>
                                                    <br>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>4h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>8h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>9h00</span>
                                                    <br>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>10h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>11h00</span>

                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AB;</i> @lang('common.afternoon')</div>
                                               <div class="time-content">
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>12h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>13h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>14h00</span>
                                                    <br>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>15h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>16h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>17h00</span>
                                                    <br>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>18h00</span>


                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3A9;</i> @lang('common.night')</div>
                                               <div class="time-content">
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>18h15</span>
                                               </div>
                                          </div>
                                     </div>

                                     <div class="row">
                                          <div class="col-lg-3">
                                               <h5>@lang('common.phanthiet') - @lang('common.nhatrang')</h5>
                                               <div>Thời gian chạy: 4 tiếng</div>
                                               <div>Tiện ích:</div>
                                               <div>
                                                    <i class="material-icons">&#xE631;</i>
                                                    <i class="material-icons">&#xE063;</i>
                                                    <i class="material-icons">&#xE63E;</i>

                                               </div>

                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AA;</i> @lang('common.morning')</div>
                                               <div class="time-content">

                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AB;</i> @lang('common.afternoon')</div>
                                               <div class="time-content">
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>12h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>0h30</span>
                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3A9;</i> @lang('common.night')</div>
                                               <div class="time-content">

                                               </div>
                                          </div>
                                     </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!--khoi hanh 3 -->
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><h3>@lang('common.departure_from') @lang('common.muine')</h3></a>
                              </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                              <div class="panel-body">
                                <div class="block-content">
                                     <div class="row">
                                          <div class="col-lg-3">
                                               <h5>@lang('common.muine') - @lang('common.hochiminh')</h5>
                                               <div>Thời gian chạy: 4 tiếng</div>
                                               <div>Tiện ích:</div>
                                               <div>
                                                    <i class="material-icons">&#xE631;</i>
                                                    <i class="material-icons">&#xE063;</i>
                                                    <i class="material-icons">&#xE63E;</i>
                                               </div>

                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AA;</i> @lang('common.morning')</div>
                                               <div class="time-content">
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>0h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>1h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>1h30</span>
                                                    <br>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>3h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>7h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>8h00</span>
                                                    <br>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>9h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>10h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>11h00</span>

                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AB;</i> @lang('common.afternoon')</div>
                                               <div class="time-content">
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>12h00</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>12h30</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>13h30</span>
                                                    <br>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>14h15</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>14h30</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>15h00</span>
                                                    <br>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>16h45</span>


                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3A9;</i> @lang('common.night')</div>
                                               <div class="time-content">
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>18h15</span>
                                               </div>
                                          </div>
                                     </div>

                                     <div class="row">
                                          <div class="col-lg-3">
                                               <h5>@lang('common.muine') - @lang('common.nhatrang')</h5>
                                               <div>Thời gian chạy: 4 tiếng</div>
                                               <div>Tiện ích:</div>
                                               <div>
                                                    <i class="material-icons">&#xE631;</i>
                                                    <i class="material-icons">&#xE063;</i>
                                                    <i class="material-icons">&#xE63E;</i>

                                               </div>

                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AA;</i> @lang('common.morning')</div>
                                               <div class="time-content">

                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AB;</i> @lang('common.afternoon')</div>
                                               <div class="time-content">
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>12h30</span>
                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>1h00</span>
                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3A9;</i> @lang('common.night')</div>
                                               <div class="time-content">

                                               </div>
                                          </div>
                                     </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!--khoi hanh 4 -->
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><h3>@lang('common.departure_from') @lang('common.nhatrang')</h3></a>
                              </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                              <div class="panel-body">
                                <div class="block-content">
                                     <div class="row">
                                          <div class="col-lg-3">
                                               <h5>@lang('common.nhatrang') - @lang('common.hochiminh')</h5>
                                               <div>Thời gian chạy: 8 tiếng</div>
                                               <div>Tiện ích:</div>
                                               <div>
                                                    <i class="material-icons">&#xE631;</i>
                                                    <i class="material-icons">&#xE063;</i>
                                                    <i class="material-icons">&#xE63E;</i>
                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AA;</i> @lang('common.morning')</div>
                                               <div class="time-content">

                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>8h00</span>

                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3AB;</i> @lang('common.afternoon')</div>
                                               <div class="time-content">
                                               </div>
                                          </div>
                                          <div class="col-lg-3">
                                               <div class="time-header"><i class="material-icons th-blue">&#xE3A9;</i> @lang('common.night')</div>
                                               <div class="time-content">

                                                    <span><i class="material-icons md-18 th-grey">&#xE425;</i>20h00</span>

                                               </div>
                                          </div>
                                     </div>
                                </div>
                              </div>
                            </div>
                          </div>


                    </div>


            </div>
          </div>
     </section>

     <section id="trasnport" class="section-transport">
          <div class="container">
            <h2>@lang('common.goods_transport')</h2>
            <hr>
            <div class="container">
              <div class="row row-content">
                <div class="col-sm-12 col-md-12 col-lg-6 step-content">
                  <!-- step 01 -->
                  <div class="row">
                    <div class="col-sm-3 col-md-3 step-number">
                      <div class="step-emotion">1</div>
                    </div>
                    <div class="col-sm-9 col-md-9 step-item">
                      <h4>Kiểm Tra</h4>
                      <div class="content">
                        <h5>Kiểm tra hàng hoá cần gởi, số điện thoại người gởi</h5>
                      </div>
                    </div>
                  </div>

                  <!-- step 02 -->
                  <div class="row">
                    <div class="col-sm-3 col-md-3 step-number02">
                      <div class="step-emotion">2</div>
                    </div>
                    <div class="col-sm-9 col-md-9 step-item">
                      <h4>Đến văn phòng Tamhanh Travel gần nhất</h4>
                      <div class="content">
                        <h5>Văn phòng Hồ Chí Minh (SG)</h5>
                        <h5>Văn phòng Phan Thiết - @lang('common.muine')</h5>
                        <h5>Văn phòng @lang('common.nhatrang') - Diên Khánh (Chất Đốt)</h5>
                      </div>
                    </div>
                  </div>

                  <!-- step 03 -->
                  <div class="row">
                    <div class="col-sm-3 col-md-3 step-number">
                      <div class="step-emotion">3</div>
                    </div>
                    <div class="col-sm-9 col-md-9 step-item">
                      <h4>Nhận hàng hoá</h4>
                      <div class="content">
                        <h5>Người nhận cung cấp thông tin rồi nhận hàng</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 slogan">
                    <ul>
                      <li><span class="material-icons md-36 th-light">&#xE5CA;</span> Giá cả hợp lý</li>
                      <li><span class="material-icons md-36 th-light">&#xE5CA;</span> Đảm bảo an toàn hàng hoá</li>
                      <li><span class="material-icons md-36 th-light">&#xE5CA;</span> Nhân viên hỗ trợ nhiệt tình</li>
                    </ul>
                </div>
              </div>
            </div>
            <!--
            <div style="position:relative; top:0; display:block; height: 600px;">
                <div class="row" style="position: absolute; top:0;width: 100%; left: 20px;">
                  <div class="col-md-4 step-colum col-left">
                    <div class="step-emotion">1</div>
                    <h4>Kiểm Tra</h4>
                    <div class="content">
                      <h5>Kiểm tra hàng hoá cần gởi</h5>
                      <h5>Số điện thoại người gởi</h5>
                      <h5>Số điện thoại người nhận</h5>
                    </div>
                  </div>
                  <div class="col-md-4 step-colum col-active">
                    <div class="step-emotion">2</div>
                    <h4>Đến vp <span class="tamhanh">Tâm Hạnh</span> gần nhất</h4>
                    <div class="content">
                      <h5>Di chuyển hàng hoá cần gởi đến văn phòng gần nhất</h5>
                      <p><strong>Văn phòng HCM</strong><br />199 Phạm Ngũ Lão, Quận 1</p>
                      <p><strong>Văn phòng Phan Thiết</strong><br />133 Tôn Đức Thắng, Phường Phú Thủy</p>
                      <p><strong>Văn phòng Mũi Né</strong><br />245A Nguyễn Đình Chiểu, Phường Hàm Tiến</p>
                      <p><strong>Văn phòng Nha Trang</strong><br />14A Trần Hưng Đạo</p>
                    </div>
                  </div>
                  <div class="col-md-4 step-colum col-right">
                    <div class="step-emotion">3</div>
                    <h4>Nhận Hàng</h4>
                    <div class="content">
                      Người nhận cung cấp thông tin rồi nhận hàng
                    </div>
                  </div>
                </div>
            </div>-->
          </div>
     </section>

     <section id="location" class="section-location">
          <h2>Văn phòng giao dịch</h2>
          <div class="container">
               <div class="row contact-content">
                  <div id="vpSaigon" class="active col-sm-12 col-md-3 col-lg-3 contact-item">
                    <div class="content active">
                      <h4>Văn phòng Hồ Chí Minh</h4>
                      <p><i class="material-icons th-dark md-18">&#xE0C8;</i> 199 Phạm Ngũ Lão, Quận 1</p>
                      <p><i class="material-icons th-dark md-18">&#xE551;</i> (028) 3920 5653 - (028) 3920 9665</p>

                      <p><i class="material-icons th-dark md-18">&#xE0C8;</i> 161 Nguyễn Cư Trinh, Quận 1</p>
                      <p><i class="material-icons th-dark md-18">&#xE551;</i> (028) 3920 5653 - (028) 3920 9665</p>
                    </div>

                  </div>
                  <div id="vpPhanthiet" class="col-sm-12 col-md-3 col-lg-3 contact-item">
                    <div class="content">
                     <h4>Văn phòng Phan Thiết</h4>
                     <p><i class="material-icons th-dark md-18">&#xE0C8;</i> 133 Tôn Đức Thắng, Phường Phú Thủy</p>
                     <p><i class="material-icons th-dark md-18">&#xE551;</i> (0252) 3833 277 - (0252) 3835 644</p>
                   </div>
                  </div>

                  <div id="vpMuine" class="col-sm-12 col-md-3 col-lg-3 contact-item">
                    <div class="content">
                     <h4>Văn phòng @lang('common.muine')</h4>
                     <p><i class="material-icons th-dark md-18">&#xE0C8;</i> 135 Nguyễn Đình Chiểu, Phường Hàm Tiến</p>
                     <p><i class="material-icons th-dark md-18">&#xE551;</i> (0252) 3741 852 - (0252) 3741 853</p>

                     <p><i class="material-icons th-dark md-18">&#xE0C8;</i> 138 Nguyễn Đình Chiểu, Phường Hàm Tiến</p>
                     <p><i class="material-icons th-dark md-18">&#xE551;</i> (0252) 3748 338</p>

                     <p><i class="material-icons th-dark md-18">&#xE0C8;</i> 354 Huỳnh Thúc Kháng, Phường Hàm Tiến</p>
                     <p><i>( Đối diện chợ Mũi Né )</i></p>
                     <p><i class="material-icons th-dark md-18">&#xE551;</i> (0252) 3748 211</p>

                     <p><i class="material-icons th-dark md-18">&#xE0C8;</i> Trạm dừng chân đường Huỳnh Tấn Phát</p>
                     <p><i>( cách đèn giao thông giao với Huỳnh Thúc Kháng 200m )</i></p>
                     <p><i class="material-icons th-dark md-18">&#xE551;</i> (0252) 3847 560 - (0252) 3847 561 - (0252) 3743 737</p>
                   </div>
                  </div>

                  <div id="vpNhatrang" class="col-sm-12 col-md-3 col-lg-3 contact-item">
                    <div class="content">
                     <h4>Văn phòng @lang('common.nhatrang')</h4>
                     <p><i class="material-icons th-dark md-18">&#xE0C8;</i> 14A Trần Hưng Đạo</p>
                     <p><i class="material-icons th-dark md-18">&#xE551;</i> (0258) 3527 525 - (0258) 3525 288</p>
                     <h4>Văn phòng @lang('common.dienkhanh')</h4>
                     <p><i class="material-icons th-dark md-18">&#xE0C8;</i> 55 Chất Đốt</p>
                     <p><i class="material-icons th-dark md-18">&#xE551;</i> (0258) 3850 925 - (0258) 3850 042</p>
                   </div>
                  </div>

               </div>
          </div>
          <div id="map">

          </div>
     </section>

     <section id="contact" class="section-contact">
          <div class="container" style="text-align:center;">
            <h2>Liên Hệ</h2>
            <hr>
            <div class="row row-centered" style="padding-bottom: 50px;">

              <div class="col-md-6 col-centered">

                @if (session('message'))
                <div class="row" id='notification-contact'>
                  <div class="col-md-6">
                    <div class = "alert alert-success"> {{session('message')}} </div>
                  </div>
                </div>
                @endif

                <form method="post" action="/contact" id="frm-contact">
                    {{ csrf_field() }}
                    <div class="col-sm-12 col-md-12">
                      <input type="text" name="email_firstname" placeholder="Your first name...">
                    </div>

                    <div class="col-sm-12 col-md-12">
                      <input type="text" name="email_lastname" placeholder="Your last name...">
                    </div>

                    <div class="col-sm-12 col-md-12">
                      <input type="email" name="email_address" placeholder="Your e-mail (*) ..." required>
                    </div>

                    <div class="col-sm-12 col-md-12">
                      <input type="text" name="email_phone" placeholder="Your phone..." class="form-input">
                    </div>

                    <div class="col-sm-12 col-md-12">
                      <textarea name="email_message" placeholder="Message: (*)" required></textarea>
                    </div>
                    <div class="col-sm-12 col-md-12 text-center">
                      <div style="width: 310px; margin: 0 auto; padding-bottom: 10px;">
                        {!! Recaptcha::render() !!}
                      </div>

                    </div>
                    <button class="btn btn-lg btn-tamhanh" type="submit">send message</button>
                </form>
              </div>
              <div class="col-sm-0 col-md-6 col-centered" style="margin-top: 40px;">
                <img src="images/contact-us03.png" class="img-responsive" >
              </div>
            </div>
          </div>
     </section>

     <section>
       <div class="container">
       </div>
     </section>

     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     
@endsection
