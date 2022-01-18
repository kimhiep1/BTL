<!-- register -->
<div id="myModal_register" class="modal fade" role="dialog" style="z-index: 999999">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content modal-register modal-form">
            <div class="modal-header">
                <span class="modal-title span_h5" style="float: left;">Đăng ký tài khoản</span>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <form class="col-md-12" action="javascript:authRegister();">
                        <div class="col-md-6 col-md-offset-2" style="display: table;float: left;">
                            <div class="input-field">
                                <input class="username" name="username" type="text" placeholder="Tên đăng nhập" />
                                <input class="name" name="name" type="text" placeholder="Tên hiển thị" />
                                <input class="email" name="email" type="email" placeholder="Địa chỉ email" required="email" />
                                <input class="password" name="password" type="password" placeholder="Mật khẩu" name="password" />
                                <input class="confirm_password" name="confirm_password" type="password" placeholder="Xác nhận lại mật khẩu" name="password" />
                                <div class="g-recaptcha captcha" data-sitekey="6Lf0-HgUAAAAAF-WwuBiQ5mz-SrdylXp9ApJwi6e" style="z-index: 99999999;"></div>
                                <div class="login_action">
                                    <input class="contact_csn" type="checkbox" id="contact_csn" checked name="contact_csn">
                                    <label style="cursor: pointer; font-size: 13px; display: inline;" for="contact_csn">Tôi đã đọc và đồng ý các điều kiện<a target="_blank" href=""> Thỏa thuận sử dụng</a></label>
                                </div>
                                <button onclick="" class="btn my-2 my-sm-0 waves-effect waves-light" style="margin-left: 0px;width: 100%; padding: 10px" type="submit">Đăng
                                    ký</button>
                                <p class="text-p"><a href="" onclick="" style=" margin-right: 15px; ">Đăng
                                        nhập</a>
                                    <span style=" color: #d0d0d0; ">|</span>
                                    <a href="" onclick="" style=" margin-left: 15px; ">Quên mật khẩu?</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-2 social_button" style="padding-top: 50px; padding-bottom: 50px;">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="" class="facebook">
                                            <span class="fa fa-facebook icon_soccial"></span>
                                            <p class="text_social">Đăng ký bằng Facebook</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="google-plus">
                                            <span class="fa fa-google-plus icon_soccial"></span>
                                            <p class="text_social">Đăng ký bằng Google</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>