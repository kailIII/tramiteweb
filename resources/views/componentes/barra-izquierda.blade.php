<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="NuevoDocumento">
                    <i class="fa fa-plus-square"></i>
                    <span>Nuevo Documento</span>
                </a>
            </li>

            <li class="treeview">
                    <a href="{!! route('misdocumentos') !!}">
                    <i class="fa fa-files-o"></i>
                    <span>Mis Documentos</span>
                </a>
            </li>
            <li class="treeview">
                <a href="{!! route('misproveidos') !!}">
                    <i class="fa fa-file-archive-o"></i>
                    <span>Mis Proveídos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-spinner"></i>
                    <span>Doc. por Recepcionar</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-check-square-o"></i> <span>Doc. Recepcionados</span>
                </a>
            </li>
            <li>
                <a href="{!! route('misdocumentosarchivados') !!}">
                    <i class="fa fa-floppy-o"></i>
                    <span>Doc. Archivados</span>
                </a>
            </li>
        </ul>
    </section>
</aside>