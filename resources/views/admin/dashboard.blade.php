  <x-layouts.adminlayout>

    <div class="container-fluid">

      <!-- Dashboard Header -->
      <div class="mb-5">
        <h2 class="fw-bold mb-1">Dashboard Overview</h2>
        <p class="text-white-50 small">Insights into your website's engagement and reach.</p>
      </div>

      <!-- Stats -->
      <div class="row g-4 mb-5">
        <div class="col-md-6 col-xl-3">
          <div class="card p-4">
            <div class="d-flex align-items-center gap-3">
              <div class="stats-icon">
                <i class="ri-mail-send-line"></i>
              </div>
              <div>
                <h6 class="text-white-50 mb-1">Total Inquiries</h6>
                <h4 class="fw-bold mb-0">{{ $contacts->count() }}</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-3">
          <div class="card p-4">
            <div class="d-flex align-items-center gap-3">
              <div class="stats-icon" style="background: rgba(76, 175, 80, 0.1); color: #4caf50;">
                <i class="ri-user-follow-line"></i>
              </div>
              <div>
                <h6 class="text-white-50 mb-1">Subscribers</h6>
                <h4 class="fw-bold mb-0">{{ $newsLetters->count() }}</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Table -->
      <div class="card overflow-hidden">
        <div class="px-4 pt-4 border-bottom border-white-10">
          <div class="d-flex gap-5">
            <div class="tab active" data-tab="contact">Inquiries</div>
            <div class="tab" data-tab="newsletter">Mailing List</div>
          </div>
        </div>

        <div class="table-responsive tab-content active" id="contact">
          <table class="table table-hover mb-0 text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Phone</th>
                <th>Subject</th>
                <th class="text-end">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse($contacts as $contact)
              <tr class="hover:bg-white/5 transition-colors">
                <td class="text-white-50">#{{ $loop->iteration }}</td>
                <td class="fw-bold text-white">{{ $contact->full_name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td><span class="badge-tag">{{ $contact->subject }}</span></td>
                <td class="text-end">
                  <form action="{{ route('contacts.delete', $contact->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-action btn-action-delete">
                      <i class="ri-delete-bin-line"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="6" class="text-center py-5 text-white-50">
                  No inquiries found.
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="table-responsive tab-content" id="newsletter">
          <table class="table table-hover mb-0 text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Subscriber Email</th>
                <th>Status</th>
                <th class="text-end">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($newsLetters as $newsLetter)
              <tr class="hover:bg-white/5 transition-colors">
                <td class="text-white-50">#{{ $loop->iteration }}</td>
                <td class="fw-bold text-white">{{ $newsLetter->email }}</td>
                <td><span class="text-success small"><i class="ri-checkbox-circle-fill me-1"></i>Active</span></td>
                <td class="text-end">
                  <form action="{{ route('newsletter.delete', $newsLetter->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-action btn-action-delete">
                      <i class="ri-delete-bin-line"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="4" class="text-center py-5 text-white-50">
                  No active subscribers.
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script>
      const tabs = document.querySelectorAll(".tab");
      const contents = document.querySelectorAll(".tab-content");
      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          tabs.forEach(t => t.classList.remove("active"));
          contents.forEach(c => c.classList.remove("active"));
          tab.classList.add("active");
          document.getElementById(tab.dataset.tab).classList.add("active");
        });
      });
    </script>
  </x-layouts.adminlayout>