@extends('layouts.master')
@section('title',$kategori-> kategori_adi)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('anasayfa')}}">Anasayfa</a></li>

            <li class="active">{{ $kategori-> kategori_adi}}</li>
        </ol>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $kategori-> kategori_adi}}</div>
                    <div class="panel-body">
                        <h3>Alt Kategoriler</h3>
                        <div class="list-group categories">
                           @foreach($alt_kategoriler as $alt_kategori)
                            <a href="{{route('kategori',$alt_kategori->slug)}}"
                               class="list-group-item">
                                <i class="fa fa-arrow-circle-right"></i>
                             {{$alt_kategori->kategori_adi}}
                            </a>
                               @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="products bg-content">
                    Sırala
                    <a href="#" class="btn btn-default">Çok Satanlar</a>
                    <a href="#" class="btn btn-default">Yeni Ürünler</a>
                    <hr>
                    <div class="row">
                            <div class="col-md-12">Üzgünüz, bu kategorideki ürünler tükenmiştir.</div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://via.placeholder.com/400x400
?text=UrunResmi"></a>
                            <p><a href="#">urun adi</a></p>
                            <p class="price">78₺</p>
                            <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
