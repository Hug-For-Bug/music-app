<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Admin /</span> Event & Ticket
</h4>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-lg-6 my-auto">
            <h4 class="mb-0 fw-bold">Total: <%= data.length %> Event</h4>
          </div>
          <div class="col-lg-6 my-auto" style="text-align: right">
            <a href="#tambahEvent" data-bs-toggle="modal" class="btn btn-dark"
              ><i class="fa fa-plus-circle"></i> Tambah Event</a
            >
          </div>
        </div>
        <hr />
        <div class="card-body">
          <div class="row">
            <% data.forEach((item) => { %>
            <div class="col-lg-4 mb-3">
              <div class="card">
                <img
                  src="http://localhost:3000/img/<%= item.image %>"
                  class="card-img-top"
                  alt="..."
                  height="200px" />
                <div class="card-body">
                  <h4 class="card-title text-center fw-semibold">
                    <%= item.name %>
                  </h4>
                  <hr class="my-3" />
                  <p class="card-text text-center">
                    <i class="fa fa-map-pin"></i> <%= item.place %> <br />
                    <i class="fa fa-calendar"></i> <%= new
                    Date(item.event_date).toLocaleDateString(undefined, {
                    weekday: 'short', day: '2-digit', month: 'short', year:
                    'numeric' }) %>
                  </p>
                  <div class="row mb-3">
                    <div class="col-12">
                      <table class="table table-bordered">
                        <tr class="fw-bold bg-secondary text-white">
                          <td>Tipe</td>
                          <td>Harga</td>
                          <td>Stok</td>
                        </tr>
                        <tr>
                          <td style="background-color: #e0e0e0">Silver</td>
                          <td>
                            <%= new
                            Number(item.price_silver).toLocaleString('id-ID', {
                            style: 'currency', currency: 'IDR'
                            }).replace(/,00$/, ''); %> %>
                          </td>
                          <td><%= item.stock_silver %></td>
                        </tr>
                        <tr>
                          <td style="background-color: #ffe091">Gold</td>
                          <td>
                            <%= new
                            Number(item.price_gold).toLocaleString('id-ID', {
                            style: 'currency', currency: 'IDR'
                            }).replace(/,00$/, ''); %>
                          </td>
                          <td><%= item.stock_gold %></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <a
                        href="/api/admin/event/delete/<%= item.id %>"
                        class="btn btn-danger w-100"
                        onclick="return confirm(`Hapus data event <%= item.name %>?`)">
                        <i class="fa fa-trash"></i> Hapus
                      </a>
                    </div>
                    <div class="col-lg-6">
                      <a
                        href="#editEvent<%= item.id %>"
                        data-bs-toggle="modal"
                        class="btn btn-info w-100">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <% }); %>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div
  class="modal fade"
  id="tambahEvent"
  data-bs-backdrop="static"
  tabindex="-1">
  <div class="modal-dialog">
    <form
      class="modal-content"
      action="/admin/event"
      method="post"
      enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title fw-bold text-primary" id="tambahEventTitle">
          <i class="fa fa-plus-circle"></i> Tambah Event
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              id="name"
              name="name"
              class="form-control"
              placeholder="Enter Name"
              required />
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="place" class="form-label">Place</label>
            <input
              type="text"
              id="place"
              name="place"
              class="form-control"
              placeholder="Enter Place"
              required />
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-3">
            <label for="image" class="form-label">Image</label>
            <input
              type="file"
              id="image"
              name="image"
              class="form-control"
              required />
          </div>
          <div class="col mb-3">
            <label for="date" class="form-label">Date</label>
            <input
              type="date"
              id="date"
              name="date"
              class="form-control"
              required />
          </div>
        </div>
        <div class="row">
          <div class="col-12 mb-2">
            <div
              class="w-100 text-center py-1 fw-semibold"
              style="background-color: #e0e0e0">
              Silver Ticket
            </div>
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-3">
            <label for="price_silver" class="form-label">Price</label>
            <input
              type="number"
              id="price_silver"
              name="price_silver"
              class="form-control"
              placeholder="0"
              required />
          </div>
          <div class="col mb-3">
            <label for="stock_silver" class="form-label">Stock</label>
            <input
              type="number"
              id="stock_silver"
              name="stock_silver"
              class="form-control"
              placeholder="0"
              required />
          </div>
        </div>
        <div class="row">
          <div class="col-12 mb-2">
            <div
              class="w-100 text-center py-1 fw-semibold"
              style="background-color: #ffe091">
              Gold Ticket
            </div>
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-0">
            <label for="price_gold" class="form-label">Price</label>
            <input
              type="number"
              id="price_gold"
              name="price_gold"
              class="form-control"
              placeholder="0"
              required />
          </div>
          <div class="col mb-0">
            <label for="stock_gold" class="form-label">Stock</label>
            <input
              type="number"
              id="stock_gold"
              name="stock_gold"
              class="form-control"
              placeholder="0"
              required />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-label-secondary"
          data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</div>

<% data.forEach(item => { %>
<div
  class="modal fade"
  id="editEvent<%= item.id %>"
  data-bs-backdrop="static"
  tabindex="-1">
  <div class="modal-dialog">
    <form
      class="modal-content"
      action="/api/admin/event/update"
      method="post"
      enctype="multipart/form-data">
      <div class="modal-header">
        <h5
          class="modal-title fw-bold text-primary"
          id="editEvent<%= item.id %>Title">
          <i class="fa fa-edit"></i> Edit Event
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" value="<%= item.id %>" />
        <div class="row">
          <div class="col mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              id="name"
              name="name"
              class="form-control"
              placeholder="Enter Name"
              value="<%= item.name %>"
              required />
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="place" class="form-label">Place</label>
            <input
              type="text"
              id="place"
              name="place"
              class="form-control"
              placeholder="Enter Place"
              value="<%= item.place %>"
              required />
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-3">
            <label for="image" class="form-label"
              >Image
              <small class="text-danger"
                >(NB*: Kosongi jika tidak diubah)</small
              ></label
            >
            <input type="file" id="image" name="image" class="form-control" />
          </div>
          <div class="col mb-3">
            <label for="date" class="form-label">Date</label>
            <input
              type="date"
              id="date"
              name="date"
              class="form-control"
              value="<%= new Date(item.event_date).toISOString().split('T')[0] %>"
              required />
          </div>
        </div>
        <div class="row">
          <div class="col-12 mb-2">
            <div
              class="w-100 text-center py-1 fw-semibold"
              style="background-color: #e0e0e0">
              Silver Ticket
            </div>
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-3">
            <label for="price_silver" class="form-label">Price</label>
            <input
              type="number"
              id="price_silver"
              name="price_silver"
              class="form-control"
              placeholder="0"
              value="<%= item.price_silver %>"
              required />
          </div>
          <div class="col mb-3">
            <label for="stock_silver" class="form-label">Stock</label>
            <input
              type="number"
              id="stock_silver"
              name="stock_silver"
              class="form-control"
              placeholder="0"
              value="<%= item.stock_silver %>"
              required />
          </div>
        </div>
        <div class="row">
          <div class="col-12 mb-2">
            <div
              class="w-100 text-center py-1 fw-semibold"
              style="background-color: #ffe091">
              Gold Ticket
            </div>
          </div>
        </div>
        <div class="row g-2">
          <div class="col mb-0">
            <label for="price_gold" class="form-label">Price</label>
            <input
              type="number"
              id="price_gold"
              name="price_gold"
              class="form-control"
              placeholder="0"
              value="<%= item.price_gold %>"
              required />
          </div>
          <div class="col mb-0">
            <label for="stock_gold" class="form-label">Stock</label>
            <input
              type="number"
              id="stock_gold"
              name="stock_gold"
              class="form-control"
              placeholder="0"
              value="<%= item.stock_gold %>"
              required />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-label-secondary"
          data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</div>
<% }) %>
