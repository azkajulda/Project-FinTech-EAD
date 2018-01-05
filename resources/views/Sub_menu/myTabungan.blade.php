@extends('Master.app')
@section('sub_menu')

	<?php if (Auth::guest()): ?>
	<section class="py-5">
      <div class="col-md-12">
	      <div class="container container-myTabungan">
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
	  </div>
	<?php else: ?>
	</section> 
		<section class="py-5" style="padding-top: 0!important;">     	
		   <section class="col-md-12">
		      <div class="col-md-12">
		        <section class="print-body">
		          <div class="box-body">
		            <button type="submit" class="btn btn-primary btn-print" style="margin-bottom: 5px;" onclick="window.print()">
		            	<i class="fa fa-print"></i>
		            	<span style="font-style: 'Arial'">Print</span>
		          	</button>
		          	<button type="submit" data-toggle="add_modal" id="add_button" class="btn btn-success btn-mod" style="margin-bottom: 5px;">
		          		<i class="fa fa-money"></i>
		            	<span style="font-style: 'Arial'">Tabung</span>
		          	</button>

		          	<button type="submit" data-toggle="add_total" id="add_total-btn" class="btn btn-warning btn-mod" style="margin-bottom: 5px;">
		          		<i class="fa fa-bank"></i>
		            	<span style="font-style: 'Arial'">Lihat Saldo</span>
		          	</button>

		          	<div class="container container-myTabungan">
				        <h1>Mutasi Rekening Tabungan</h1>
			      	</div>

		            <table class="table table-bordered table-striped table-hover">
		              <thead>
		                <tr>
		                  <th>No</th>
		                  <th>Keterangan</th>
		                  <th>Tanggal</th>
		                  <th>Sejumlah</th>
		                </tr>
		              </thead>
		              <?php $i=1; foreach ($tabung as $data):?>
		              <tbody>
		              	<td>{{$i}}</td>		              	
		              	<td>{{$data->keterangan}}</td>
		              	<td>{{$data->created_at}}</td>
		              	<td>Rp {{$data->jumlah}}</td>
		          	  <?php $i++; endforeach?>
		              </tbody>
		            </table>
		          </div>
		        </section>
		      </div>
		  </section>
    	<?php endif ?>
	  
    </section>

  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="add_modal">
  <div class="modal-dialog"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Menabung Yuk</h4>
      </div>
      <form method="POST" action="{{ url('/myTabungan/add')}}" enctype="multipart/form-data">
      {{csrf_field()}}
        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan" value="">
            </div>
        
        	<div class="form-group">
              <label for="jumlah">Jumlah Uang</label>
              <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah uang yang akan di tabung" value="">
            </div>
          </div>
        </div>
      
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="add_total">
  <div class="modal-dialog"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Saldo anda saat ini</h4>
      </div>
        <div class="modal-body">
          <div class="box-body">
          	<h1>Rp {{$jumlah[0]->total}}</h1>
          </div>
        </div>
      
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $('#add_button').click(function(){
      $('#add_modal').modal('show');
    })
  })

  $(document).ready(function(){
    $('#add_total-btn').click(function(){
      $('#add_total').modal('show');
    })
  })

</script>
@endsection