const deleteProduk = (id, name) => {
  event.preventDefault();
  Swal.fire({
      title: "Delete",
      text: `Are you sure you want to delete ${name}`,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Confirm'

  }).then((result) => {
    if(result.isConfirmed) {
      window.location.href = `produk/delete/${id}`
    }
  })
}

const deleteMaterial = (id, supplierId, name) => {
  event.preventDefault();
  Swal.fire({
      title: "Delete",
      text: `Are you sure you want to delete ${name}`,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Confirm'

  }).then((result) => {
    if(result.isConfirmed) {
      window.location.href = `bahan/delete/${supplierId}/${id}`
    }
  })
}

