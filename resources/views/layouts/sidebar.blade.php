<div class="sidebar" data-color="purple" data-image="{{asset('admin_css/assets/img/sidebar-1.jpg')}}">

    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="{{route('admin.index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Ana Sayfa</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.yazar.index')}}">
                    <i class="material-icons">person</i>
                    <p>Yazarlar</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.kategori.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Kategoriler</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.kitap.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Kitaplar</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.yayinevi.index')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Yayın Evleri</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.slider.index')}}">
                    <i class="material-icons">location_on</i>
                    <p>Slider</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.order.index')}}">
                    <i class="material-icons text-gray">Siparisler</i>
                    <p>Siparişlerim</p>
                </a>
            </li>
            <!--


            <li class="active-pro">
                <a href="{{route('admin.yayinevi.index')}}">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
            !-->
        </ul>
    </div>
</div>