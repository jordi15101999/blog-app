const flashData = $(".flash-data").data("flashdata");

if (flashData) {
	Swal.fire({
		icon: "success",
		text: flashData,
		showConfirmButton: false,
		timer: 3000,
	});
}