
tai_gio_hang() {
    axios.get('/khach-hang/hien-thi-ds-gio-hang')
        .then((res) => {
            this.ds_gio_hang = res.data.gio_hang;
            this.tong_tien_tat_ca = res.data.tong_tien_tat_ca;
            this.tong_so_luong = res.data.tong_so_luong;
        });
},
them_so_luong(id) {
    axios.post('/khach-hang/them-so-luong/' + id)
        .then((res) => {
            if (res.data.status) {
                toastr.success(res.data.message);
                this.tai_gio_hang();
            } else {
                toastr.error('Có lỗi không mong muốn!');
            }

        });
},
tru_so_luong(id) {
    axios
        .post('/khach-hang/tru-so-luong/' + id)
        .then((res) => {
            if (res.data.status) {
                toastr.success(res.data.message);
                this.tai_gio_hang();
            } else {
                toastr.error('Có lỗi không mong muốn!');
            }
        });
},
xoa_san_pham_gio_hang(id) {
    axios
        .post('/khach-hang/xoa-san-pham-gio-hang/' + id)
        .then((res) => {
            if (res.data.status) {
                toastr.success(res.data.message);
                this.tai_gio_hang();
            } else {
                toastr.error('Có lỗi không mong muốn!');
            }
        });
},
formatCurrency(value) {
        const formatter = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
        });
        return formatter.format(value);
    },
    quan_ly_san_pham_yeu_thich(id) {
        axios
            .post('/khach-hang/quan-ly-san-pham-yeu-thich/' + id)
            .then((res) => {
                if (res.data.status) {
                    toastr.success(res.data.message);
                    this.tai_san_pham_yeu_thich();
                } else {
                    toastr.error('Có lỗi không mong muốn!');
                }
            });
    },

    tai_san_pham_yeu_thich() {
        axios
            .get('/hien-thi-san-pham-yeu-thich')
            .then((res) => {
                this.ds_sp_yeu_thich = res.data.du_lieu;
            });
    },

    isFavorite(productId) {
        if (this.ds_sp_yeu_thich === undefined) {
            this.tai_san_pham_yeu_thich();
        }
    
        if (this.ds_sp_yeu_thich && this.ds_sp_yeu_thich.length > 0) {
            const isFav = this.ds_sp_yeu_thich.some(favorite => favorite.ma_san_pham === productId);
            return isFav;
        }
        return false;
    },
    
    
