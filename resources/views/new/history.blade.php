<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Admin /</span> History Transaksi Selesai
</h4>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="fw-bold text-danger">Total: <%= data.length %> Transaksi</h5>

        <table class="table table-hover table-bordered">
          <thead>
            <tr class="fw-bold bg-secondary text-white">
              <td class="text-center">Code</td>
              <td>Detail Order</td>
              <td>Pembeli</td>
              <td class="text-center">Total</td>
              <td class="text-center">Bank</td>
              <td class="text-center">Tgl Pembayaran</td>
              <!-- <td class="text-center">Action</td> -->
            </tr>
          </thead>
          <tbody>
            <% if(data.length != 0) { %> <% data.forEach(item => { %>
            <tr>
              <td class="fw-bold text-center"><%= item.code %></td>
              <td>
                <h6 class="mb-0 fw-semibold"><%= item.name %></h6>
                <small class="fw-bold text-primary">
                  <i class="fa fa-ticket"></i> <%= item.qty %> Ticket
                  <span class="text-uppercase"><%= item.type %></span>
                </small>
              </td>
              <td>
                <%= item.user_name %> <br />
                <small><%= item.email %></small>
              </td>
              <td class="text-center">
                <%= new Number(item.price * item.qty).toLocaleString('id-ID', {
                style: 'currency', currency: 'IDR' }).replace(/,00$/, ''); %>
              </td>
              <td class="fw-bolder text-uppercase text-center">
                <%= item.bank %>
              </td>
              <td class="text-center">
                <%= new Date(item.updated_at).toLocaleDateString(undefined, {
                weekday: 'short', day: '2-digit', month: 'short', year:
                'numeric' }) %>
              </td>
              <!-- <td class="text-center">
                <a
                  href="#verifikasiPembayaran<%= item.code %>"
                  data-bs-toggle="modal"
                  class="btn btn-sm btn-info"
                  >Verifikasi</a
                >
              </td> -->
            </tr>
            <% }) %> <% } else { %>
            <tr>
              <td colspan="6" class="text-center">Tidak ada transaksi.</td>
            </tr>
            <% } %>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<% data.forEach(item => { %>
<div
  class="modal fade"
  id="verifikasiPembayaran<%= item.code %>"
  data-bs-backdrop="static"
  tabindex="-1">
  <div class="modal-dialog">
    <form
      class="modal-content"
      action="/api/admin/payment/verification"
      method="post">
      <input type="hidden" name="code" value="<%= item.code %>" />
      <div class="modal-header">
        <h5
          class="modal-title fw-bold text-primary"
          id="verifikasiPembayaran<%= item.code %>Title">
          <i class="fa fa-file"></i> Verifikasi Pembayaran
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-2">
          <div class="col mb-3">
            <label class="form-label">Bank</label>
            <input
              type="text"
              class="form-control"
              value="<%= item.bank %>"
              readonly />
          </div>
          <div class="col mb-3">
            <label class="form-label">Total</label>
            <input
              type="text"
              class="form-control"
              value="<%= new Number(item.price * item.qty).toLocaleString('id-ID', {
                  style: 'currency', currency: 'IDR' }).replace(/,00$/, ''); %>"
              readonly />
          </div>
        </div>
        <div class="row">
          <div class="col mb-0">
            <label class="form-label">Bukti Pembayaran</label>
            <img
              src="http://localhost:3000/img/<%= item.proof_payment %>"
              alt="proof"
              class="w-100 img" />
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
        <button type="submit" class="btn btn-primary">Verifikasi</button>
      </div>
    </form>
  </div>
</div>
<% }) %>
