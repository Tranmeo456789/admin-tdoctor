<div id="content" class="container-fluid px-0">
    <div class="header-content">
        <h3 class="header-title"></h3>
        <div class="header-content-left">
            <div class="item-header-content">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle"></i>
                        ADMINTOR
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Tài khoản</a>
                        <a class="dropdown-item" href="#">Thoát</a>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="card mt-3 ml-2">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách khách hàng</h5>
            <div class="form-search form-inline" style="width:500px">
                <form action="">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button id="btn-search" class="input-group-text" ><i class="fas fa-search"></i></button>
                        <!-- <span class="input-group-text"> Họ tên:</span> -->
                    </div>
                    <input type="search" id="input-search" style="width:450px"  class="form-control form-search" placeholder="Nhập tên khách hàng để tìm kiếm">
                </div>

                    <!-- <input type="" id="input-search" style="width:500px"  class="form-control form-search" placeholder="Nhập tên khách hàng để tìm kiếm">
                    <button class="search-product" ><i class="fas fa-search"></i></button> -->
                </form>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-checkall" style="font-size:14px!important; border: none; table-layout: auto;width: 100%">
                <thead style="">
                    <tr>
                        <th scope="col">Mã khách hàng</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Nhóm khách hàng</th>
                        <th scope="col">Tổng chi tiêu</th>
                        <th scope="col">Tồn SL đơn hàng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td style="width: 15%">TD77788</td>
                        <td style="width: 20%">Nguyễn Thị Tình</td>
                        <td style="width: 15%">0987888777</td>
                        <td style="width: 15%">Mua lẻ</td>
                        <td style="width: 20%">568,000đ</td>
                        <td style="width: 15%">10</td>                       
                    </tr>  
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">Trước</span>
                            <span class="sr-only">Sau</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>