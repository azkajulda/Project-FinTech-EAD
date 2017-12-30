@extends('Master.app')
@section('sub_menu')

	<section class="py-5">
      <div class="col-md-12">
	      <div class="container container-myTabungan">
	      	<?php if (Auth::guest()): ?>
	        <h1>My Tabungan</h1>
	        <p>My Tabungan merupakan fitur utama web kami yaitu fitur yang berfungsi untuk merecord semua data menabung anda sehingga dapat terpantau jumlah keseluruhan uang yang tertabung.</p>
	      </div>
	      <div class="container container-myTabungan">
	      	<h3>Tata Cara melakukan penabungan di MyTabung</h3>
	      </div>

	      <div class="container-tatacara">
		     <div class="container-imgtatacara inline-block" style="background: url('{{ asset('asset/image/tatacaratabung.png') }}');">
			 </div>
		      <div class="container-desc inline-block">
		      	<p>1. Login terlebih dahulu pada menu login, jika belum memiliki akun masuk terlebih dahulu ke menu login lalu pilih register</p>
		      	<p>2. Lalu masukan data diri anda di menu register</p>
		      	<p>3. Jika berhasil register lakukan login terlebih dahulu</p>
		      	<p>4. Jika sudah login, mulailah menabung dari sekarang di menu MyTabung</p>
		      </div>
	      </div>
	      <?php else: ?>
		   <section class="col-md-12">
		      <div class="col-md-12">
		        <section class="print-body">
		          <div class="box-body">
		            <button type="submit" class="btn btn-success btn-print" style="margin-bottom: 5px;" onclick="window.print()">
		            	<i class="fa fa-print"></i>
		            	<span style="font-style: 'Arial'">Tabung </span>
		          	</button>
		            <table class="table table-bordered table-striped table-hover">
		              <thead>
		                <tr>
		                  <th >No</th>
		                  <th>Tanggal</th>
		                  <th>Jumlah</th>
		                  <th>Total</th>
		                </tr>
		              </thead>
		              <tbody>
		              </tbody>
		            </table>
		          </div>
		        </section>
		      </div>
		  </section>
    	<?php endif ?>
	  </div>
    </section>
@endsection