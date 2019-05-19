<li class="sub-menu">
  <a href="javascript:;" ><i class="fa fa-desktop"></i><span>Quản lý Tour1</span></a>
  <ul class="sub">

      <li><a  href="{{asset('admin/tour/create')}}">Đăng Tour</a></li>
      <li><a  href="{{asset('admin/tour/'.$user->role_id)}}">Danh sách tour</a></li>
      <li><a  href="{{asset('admin/tour/trash/'.$user->role_id)}}">Sọt rác</a></li>
  </ul>
</li>

<li class="sub-menu">
  <a href="javascript:;" ><i class="fa fa-desktop"></i><span>Danh Lam Thắng Cảnh</span></a>
  <ul class="sub">
      <li><a  href="{{asset('admin/favourite/create')}}">Đăng bài</a></li>
      <li><a  href="{{asset('admin/favourite')}}">Danh sách bài đăng</a></li>
  </ul>
</li>

<li class="sub-menu">
  <a href="javascript:;" ><i class="fa fa-desktop"></i><span>Quản lý User</span></a>
  <ul class="sub">
      <li><a  href="{{asset('admin/profile/create')}}">Thêm User</a></li>
      <li><a  href="{{asset('admin/profile/list')}}">Danh sách User</a></li>
      <li><a  href="{{asset('admin/profile/trash')}}">Sọt rác</a></li>
  </ul>
</li>

<li class="sub-menu">
  <a href="javascript:;" ><i class="fa fa-desktop"></i><span>Cập nhật thông tin</span></a>
  <ul class="sub">
      <li><a  href="{{asset('admin/profile')}}">Avatar - mật khẩu</a></li>
  </ul>
</li>

<li class="sub-menu">
  <a href="javascript:;" ><i class="fa fa-desktop"></i><span>Setting</span></a>
  <ul class="sub">
      <li><a  href="{{asset('admin/setting/introdution')}}">Lời giới thiệu</a></li>
      <li><a  href="{{asset('admin/setting/')}}">Thông tin văn phòng</a></li>
  </ul>
</li>
