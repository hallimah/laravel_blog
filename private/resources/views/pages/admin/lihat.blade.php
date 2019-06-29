@extends('pages.admin.dashboard')

@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
		<div class="col-sm-9">
            <h1 class="page-header">Semua Postingan</h1>
        </div>
    </div>
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-container">
                    <input type="text" name="cari" class="form-control" placeholder="Cari">
                </div>
            </div>
			
			<div class="col-xs-6 col-md-3">
                <div class="panel panel-container">
                    <select name="kategori" class="form-control">
                        <option value="0">Kategori</option>
                        <option value="1">Novel</option>
                        <option value="2">Komik</option>
                        <option value="3">Films</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
	
	
	
	<div class="row">
        <div class="col-sm-9">
			<div class="panel panel-container">
				<div class="panel-body">
					<div class="article border-bottom">
						<div class="row">
							<div class="col-xs-10 col-md-10">
								<h4><a href="#">Tsuiraku JK to Haijin Kyoushi</a></h4>
									<p>Mikoto Ochiai siap untuk melompat dari atap gedung sekolah menengahnya setelah ditolak oleh bocah yang dicintai.</p>
									
									<div class="col-lg-1 no-padding">
										<div class="text-muted"><a href=""><p>View</p></a></div>
									</div>
									<div class="col-lg-1 no-padding">
										<div class="text-muted"><a href=""><p>Edit</p></a></div>
									</div>
									<div class="col-lg-1 no-padding">
										<div class="text-muted"><a href=""><p>Delete<p></a></div>
									</div>
							</div>
									
						</div>
					</div>
				
				<div class="article border-bottom">
						<div class="row">
							<div class="col-xs-10 col-md-10">
								<h4><a href="#">Fruit Basket</a></h4>
									<p>Honda Tohru merupakan karakter utama pada manga ini diceritakan bahwa ibundanya meninggal bahkan ketika masih berada dalam kelas di sekolahnya.</p>

                                    <div class="col-lg-1 no-padding">
										<div class="text-muted"><a href=""><p>View</p></a></div>
									</div>
									<div class="col-lg-1 no-padding">
										<div class="text-muted"><a href=""><p>Edit</p></a></div>
									</div>
									<div class="col-lg-1 no-padding">
										<div class="text-muted"><a href=""><p>Delete<p></a></div>
									</div>
							</div>
						</div>
				</div>
				<div class="article border-bottom">
						<div class="row">
							<div class="col-xs-10 col-md-10">
								<h4><a href="#">Barakamon</a></h4>
									<p>Cerita dari Barakamon umumnya terdiri dari kisah-kisah jenaka yang lucu. Entah berbentuk sebuah bab yang panjang atau berbentuk tsukkomi–tsukkomi pendek.</p>

                                    <div class="col-lg-1 no-padding">
										<div class="text-muted"><a href=""><p>View</p></a></div>
									</div>
									<div class="col-lg-1 no-padding">
										<div class="text-muted"><a href=""><p>Edit</p></a></div>
									</div>
									<div class="col-lg-1 no-padding">
										<div class="text-muted"><a href=""><p>Delete<p></a></div>
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
@stop
@section('footer')
<div class=" footer col-sm-12">
    <p class="back-link">My <a href="https://www.medialoot.com">Blog's</a></p>
</div>
@stop