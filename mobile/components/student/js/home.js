
$.ajax({
    url:"../../../server/get-teachers",
    type: "GET",
    dataType: "json",
    beforeSend: (e) => {

    },
    success: (data) => { 
        console.log("sdasdsadasd")
        console.log(data.lists);
        
        $("#list-teachers").empty();

        $.each(data.lists, (i, e)=>{

            $("#list-teachers").append(`
                <!-- Single Top Product Card -->
                <div class="col-12">
                  <div class="card single-product-card">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="card-side-img">
                          <!-- Product Thumbnail -->
                          <a class="product-thumbnail d-block" href="shop-details.html">
                            <img src="${e.img}" alt="">
                          </a>
                          <br>
                          <i class="bi bi-person"></i> 0  
                        </div>

                        <div class="card-content px-4 py-2">
                          <!-- Product Title -->
                          <a class="product-title d-block text-truncate mt-0" href="shop-details.html">${e.username}</a>
                          <!-- Product Price -->
                          <p class="sale-price">${e.email}</p>
                          <!-- Add To Cart Button -->
                          <a class="btn btn-primary rounded-pill btn-sm seek" style="cursor: pointer;" data-id="${e.id}">Seek Guidance</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            `);


        });
    }
});

// Toastify({
//     text: "This is a toast",
//     duration: 3000
// }).showToast();

$(document).on("click", ".seek", (e)=>{

    $("#fullscreenModal").modal("show");

});