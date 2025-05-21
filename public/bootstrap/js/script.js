document.addEventListener('DOMContentLoaded', function() {
    // Tambahkan event listener ke semua form penghapusan
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah pengiriman form langsung
            
            // Tampilkan SweetAlert2
            Swal.fire({
                title: 'Apakah anda yakin ingin menghapus?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Delete'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Kirim form jika pengguna mengkonfirmasi
                    this.submit();
                }
            });
        });
    });
});