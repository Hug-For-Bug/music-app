<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Admin /</span> Profile
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item">
        <a class="nav-link active" href="javascript:void(0);"
          ><i class="bx bx-user me-1"></i> Account</a
        >
      </li>
    </ul>
    <div class="card mb-4">
      <h5 class="card-header">Profile Details</h5>
      <!-- Account -->
      <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
          <img
            src="http://localhost:3000/img/user.png"
            alt="user-avatar"
            class="d-block rounded"
            height="100"
            width="100"
            id="uploadedAvatar" />
        </div>
      </div>
      <hr class="my-0" />
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="admin_name" class="form-label">Name</label>
              <input
                class="form-control"
                type="text"
                id="admin_name"
                readonly />
            </div>
            <div class="mb-3 col-md-6">
              <label for="admin_gender" class="form-label">Gender</label>
              <input
                class="form-control"
                type="text"
                id="admin_gender"
                readonly />
            </div>
            <div class="mb-3 col-md-6">
              <label for="admin_email" class="form-label">Email</label>
              <input
                class="form-control"
                type="text"
                id="admin_email"
                readonly />
            </div>
            <div class="mb-3 col-md-6">
              <label for="admin_phone" class="form-label">Phone</label>
              <input
                class="form-control"
                type="text"
                id="admin_phone"
                readonly />
            </div>
            <div class="mb-3 col-md-6">
              <label for="admin_address" class="form-label">Address</label>
              <input
                class="form-control"
                type="text"
                id="admin_address"
                readonly />
            </div>
            <div class="mb-3 col-md-6">
              <label for="admin_created" class="form-label">Created At</label>
              <input
                class="form-control"
                type="text"
                id="admin_created"
                readonly />
            </div>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
  </div>
</div>

<script>
  const adminSession = JSON.parse(sessionStorage.getItem("userData"));

  if (adminSession) {
    document.getElementById("admin_name").value = adminSession.name;
    document.getElementById("admin_gender").value = adminSession.gender;
    document.getElementById("admin_email").value = adminSession.email;
    document.getElementById("admin_phone").value = adminSession.phone;
    document.getElementById("admin_address").value = adminSession.address;
    document.getElementById("admin_created").value = adminSession.created_at;
  }
</script>
