<div>
    <!-- Wrap ALL content in this single div -->

    <div class="space-y-6">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Users Management</h1>
                <p class="text-gray-600">Manage all system users here</p>
            </div>

            <!-- Add User Button - Bootstrap Modal Trigger -->
            <button type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#addUserModal"
                    class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span>Add New User</span>
            </button>
        </div>

        <!-- Flash Messages -->
        @if(session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session()->has('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <!-- Users Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($users as $user)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 bg-sky-100 rounded-full flex items-center justify-center text-sky-600 font-semibold mr-3">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </div>
                                    <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <!-- Edit Button - Triggers modal via Livewire -->
                                    <button wire:click="openEditModal({{ $user->id }})"
                                            class="text-sky-600 hover:text-sky-900 p-1 rounded hover:bg-sky-50">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>

                                    <!-- Delete Button -->
                                    <button wire:click="delete({{ $user->id }})"
                                            onclick="return confirm('Are you sure you want to delete {{ $user->name }}?')"
                                            class="text-red-600 hover:text-red-900 p-1 rounded hover:bg-red-50">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-4.201a4 4 0 01-4.899 1.071M3 21h18m-5-10a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <p class="mt-2">No users found</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($users->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $users->links() }}
            </div>
            @endif
        </div>
    </div>

    <!-- Bootstrap Add User Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="store">
                    <div class="modal-body">
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" wire:model="name" id="name" class="form-control" required>
                                @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" wire:model="email" id="email" class="form-control" required>
                                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="password" class="form-label">Password</label>
                                <input type="password" wire:model="password" id="password" class="form-control" required minlength="6">
                                @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                                <small class="text-muted">Minimum 6 characters</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Edit User Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="update">
                    <div class="modal-body">
                        <div class="space-y-4">
                            <input type="hidden" wire:model="edit_id">

                            <div>
                                <label for="edit_name" class="form-label">Full Name</label>
                                <input type="text" wire:model="name" id="edit_name" class="form-control" required>
                                @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="edit_email" class="form-label">Email Address</label>
                                <input type="email" wire:model="email" id="edit_email" class="form-control" required>
                                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="edit_password" class="form-label">New Password (Optional)</label>
                                <input type="password" wire:model="password" id="edit_password" class="form-control" minlength="6">
                                @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                                <small class="text-muted">Leave blank to keep current password</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript for Bootstrap Modals -->
    <script>
        // Initialize Bootstrap modals when Livewire loads
        document.addEventListener('livewire:init', function () {
            console.log('Livewire initialized - Bootstrap modals ready');

            // Listen for edit modal open event
            Livewire.on('openEditModal', function () {
                const editModal = new bootstrap.Modal(document.getElementById('editUserModal'));
                editModal.show();
            });

            // Listen for modal close events
            Livewire.on('closeModal', function (modalId) {
                const modalElement = document.getElementById(modalId);
                if (modalElement) {
                    const modal = bootstrap.Modal.getInstance(modalElement);
                    if (modal) {
                        modal.hide();
                    }
                }
            });
        });

        // Reset form when modals are hidden
        document.addEventListener('DOMContentLoaded', function () {
            // Add modal reset
            const addModal = document.getElementById('addUserModal');
            if (addModal) {
                addModal.addEventListener('hidden.bs.modal', function () {
                    // Trigger Livewire reset
                    Livewire.dispatch('resetForm');
                });
            }

            // Edit modal reset
            const editModal = document.getElementById('editUserModal');
            if (editModal) {
                editModal.addEventListener('hidden.bs.modal', function () {
                    // Trigger Livewire reset
                    Livewire.dispatch('resetForm');
                });
            }

            // Test if Bootstrap is loaded
            if (typeof bootstrap !== 'undefined') {
                console.log('✅ Bootstrap is loaded');
            } else {
                console.error('❌ Bootstrap is NOT loaded!');
            }
        });

        // Debug: Check if everything is working
        window.addEventListener('load', function () {
            console.log('Page fully loaded');
            console.log('Livewire:', typeof Livewire !== 'undefined' ? '✅ Loaded' : '❌ Not loaded');
            console.log('Bootstrap:', typeof bootstrap !== 'undefined' ? '✅ Loaded' : '❌ Not loaded');
        });
    </script>

    <!-- Simple Test Button (remove after testing) -->
    <button onclick="testBootstrapModal()"
            style="position: fixed; bottom: 20px; right: 20px; background: #10b981; color: white; padding: 10px 15px; border-radius: 5px; z-index: 9999;">
        Test Bootstrap Modal
    </button>

    <script>
    function testBootstrapModal() {
        if (typeof bootstrap !== 'undefined') {
            const testModal = new bootstrap.Modal(document.getElementById('addUserModal'));
            testModal.show();
            console.log('✅ Bootstrap modal test successful');
        } else {
            alert('Bootstrap is not loaded!');
        }
    }
    </script>
</div>
