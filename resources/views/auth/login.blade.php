@extends('layouts.master2')
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
		<div class="container-fluid">
			<div class="row no-gutter">
				<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
					<div class="login d-flex align-items-center py-2">
						<div class="container p-0">
							<div class="row">
								<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
									<div class="card-sigin">
										<div class="card-sigin">
											<div class="main-signup-header">
												<h3> HR Management System </h3>
                                                <h2>اهلا بك! </h2>
												<h5 class="font-weight-semibold mb-4">تسجيل الدخول</h5>
												<form action="{{ route('login.action') }}" method="post">
                                                    @csrf

                                                    @if(session()->has('error'))
                                                        <div class="alert alert-danger">
                                                            {{ session()->get('error') }}
                                                        </div>
                                                    @endif

													<div class="form-group">
														<label> اسم المستخدم </label>
                                                        <input class="form-control" name="username" placeholder="ادخل اسم المستخدم" type="text" >
                                                        @error('username')
                                                            <div class="text-danger pt-1">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
													</div>
													<div class="form-group">
														<label>كلمة المرور</label>
                                                        <input class="form-control" name="password" placeholder="ادخل كلمة المرور" type="password" >
                                                        @error('password')
                                                        <div class="text-danger pt-1">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
													</div>
                                                    <button class="btn btn-main-primary btn-block">تسجيل الدخول</button>
												</form>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->
			</div>
		</div>
@endsection
@section('js')
@endsection
