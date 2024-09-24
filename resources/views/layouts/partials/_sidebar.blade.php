<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('assets/dist/img/logorspm.png') }}" alt="rspm Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><small>KOMITE KEPERAWATAN</small></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item">
                    @can('view_profil')
                    <a href="{{ route('admin.profil.view') }}" class="nav-link">
                        <i class="nav-icon fa fa-user-circle"></i>
                        <p> Profil <i class=""></i>
                        </p>
                    </a>
                    @endcan
                </li>
                <li class="nav-item">
                    @can('view_sekretaris')
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p> Surat Menyurat <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.suratmenyurat.form') }}" class="nav-link">
                                <i class="nav-icon fa fa-arrow-circle-up"></i>
                                <p>UPLOAD DOKUMEN</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.suratmenyurat.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-search"></i>
                                <p>CARI DOKUMEN</p>
                            </a>
                        </li>
                    </ul>
                    @endcan
                </li>
                <li class="nav-item">
                    @can('view_perbid')
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>HASIL LOGBOOK<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.bidan1') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>BIDAN 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.bidan2') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>BIDAN 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.bidan3') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>BIDAN 3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk1') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk2anestesi') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 2 ANESTESI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk2bedah') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 2 BEDAH</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk2hd') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 2 HEMODIALISA</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk2icu') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 2 ICU</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk2igd') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 2 IGD</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk2ipcn') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 2 IPCN</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk2medikalbedah') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 2 MEDIKAL BEDAH</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk2neonatologi') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 2 NEONATOLOGI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk3anestesi') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 3 ANESTESI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk3bedah') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 3 BEDAH</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk3hd') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 3 HEMODIALISA</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk3icu') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 3 ICU</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk3igd') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 3 IGD</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk3ipcn') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 3 IPCN</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk3medikalbedah') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 3 MEDIKAL BEDAH</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hasil.pk3neonatologi') }}" class="nav-link">
                                <i class="nav-icon fa fa-address-card"></i>
                                <p>PK 3 NEONATOLOGI</p>
                            </a>
                        </li>
                    </ul>
                    @endcan
                </li>
                
                <li class="nav-item">
                    @can('view_all')
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p> SPK <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            @can('view_hrd')
                            <a href="{{ route('admin.spk.form') }}" class="nav-link">
                                <i class="nav-icon fa fa-arrow-circle-up"></i>
                                <p>UPLOAD SPK</p>
                            </a>
                            @endcan
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.spk.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-search"></i>
                                <p>CARI SPK</p>
                            </a>
                        </li>
                    </ul>
                    @endcan
                </li>

                <li class="nav-item">
                    @can('view_all')
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p> LOGBOOK <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            @can('view_penilaian')
                            <a href="{{ route('admin.rkk.view') }}" class="nav-link">
                                <i class="nav-icon fa fa-clipboard"></i>
                                <p>Form RKK</p>
                            </a>
                            @endcan
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.rkk.hasil') }}" class="nav-link">
                                <i class="nav-icon fa fa-list"></i>
                                <p>Hasil RKK</p>
                            </a>
                        </li>
                    </ul>
                    @endcan
                </li>

                <li class="nav-item">
                    @can('view_all')
                    <a href="{{ route('admin.perawat.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p> File Perawat <i class=""></i>
                        </p>
                    </a>
                    @endcan
                </li>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>