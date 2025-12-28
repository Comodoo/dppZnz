<div>
    <!-- Wrap everything in a single root div -->
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Achievements Management</h1>
                <p class="text-gray-600">Manage all achievements here</p>
            </div>

            <!-- Add Achievement Button - Uses Livewire method -->
            <button wire:click="openAddModal"
                    class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span>Add New Achievement</span>
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

        <!-- Achievements Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Number</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Created</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($achievements as $achievement)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $achievement->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                    @if($achievement->type == 'Complainants') bg-blue-100 text-blue-800
                                    @elseif($achievement->type == 'Victims') bg-red-100 text-red-800
                                    @elseif($achievement->type == 'Recorded Files') bg-green-100 text-green-800
                                    @else bg-purple-100 text-purple-800
                                    @endif">
                                    {{ $achievement->type }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ number_format($achievement->number) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $achievement->year }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ \Carbon\Carbon::parse($achievement->date_created)->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <!-- Edit Button -->
                                    <button wire:click="openEditModal({{ $achievement->id }})"
                                            class="text-sky-600 hover:text-sky-900 p-1 rounded hover:bg-sky-50">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>

                                    <!-- Delete Button -->
                                    <button wire:click="delete({{ $achievement->id }})"
                                            onclick="return confirm('Are you sure you want to delete this achievement?')"
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
                            <td colspan="6" class="px-6 py-8 text-center text-gray-500">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg>
                                <p class="mt-2">No achievements found</p>
                                <p class="text-sm text-gray-400">Click "Add New Achievement" to create your first record</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($achievements->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $achievements->links() }}
            </div>
            @endif
        </div>
    </div>

    <!-- Livewire-controlled Add Achievement Modal -->
    @if($showAddModal)
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-full max-w-lg shadow-lg rounded-md bg-white">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Add New Achievement</h3>
                <button wire:click="closeAddModal" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <form wire:submit.prevent="store">
                <div class="space-y-4">
                    <!-- Type Selection -->
                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-700">Type *</label>
                        <select wire:model="type" id="type" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-sky-500 focus:border-sky-500" required>
                            <option value="">Select Type</option>
                            @foreach($achievementTypes as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                        @error('type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Number -->
                    <div>
                        <label for="number" class="block text-sm font-medium text-gray-700">Number *</label>
                        <input type="number" wire:model="number" id="number"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-sky-500 focus:border-sky-500"
                               min="1" required placeholder="e.g., 100">
                        @error('number') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Year -->
                    <div>
                        <label for="year" class="block text-sm font-medium text-gray-700">Year *</label>
                        <input type="text" wire:model="year" id="year"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-sky-500 focus:border-sky-500"
                               maxlength="4" required placeholder="e.g., 2024">
                        @error('year') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        <p class="mt-1 text-xs text-gray-500">Must be 4 digits (e.g., 2024)</p>
                    </div>

                    <!-- Date Created -->
                    <div>
                        <label for="date_created" class="block text-sm font-medium text-gray-700">Date Created *</label>
                        <input type="date" wire:model="date_created" id="date_created"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-sky-500 focus:border-sky-500" required>
                        @error('date_created') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" wire:click="closeAddModal"
                            class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit"
                            class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">
                        Create Achievement
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endif

    <!-- Livewire-controlled Edit Achievement Modal -->
    @if($showEditModal)
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-full max-w-lg shadow-lg rounded-md bg-white">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Edit Achievement</h3>
                <button wire:click="closeEditModal" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <form wire:submit.prevent="update">
                <div class="space-y-4">
                    <input type="hidden" wire:model="edit_id">

                    <!-- Type Selection -->
                    <div>
                        <label for="edit_type" class="block text-sm font-medium text-gray-700">Type *</label>
                        <select wire:model="type" id="edit_type" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-sky-500 focus:border-sky-500" required>
                            @foreach($achievementTypes as $typeOption)
                                <option value="{{ $typeOption }}" @if($type == $typeOption) selected @endif>
                                    {{ $typeOption }}
                                </option>
                            @endforeach
                        </select>
                        @error('type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Number -->
                    <div>
                        <label for="edit_number" class="block text-sm font-medium text-gray-700">Number *</label>
                        <input type="number" wire:model="number" id="edit_number"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-sky-500 focus:border-sky-500"
                               min="1" required>
                        @error('number') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Year -->
                    <div>
                        <label for="edit_year" class="block text-sm font-medium text-gray-700">Year *</label>
                        <input type="text" wire:model="year" id="edit_year"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-sky-500 focus:border-sky-500"
                               maxlength="4" required>
                        @error('year') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Date Created -->
                    <div>
                        <label for="edit_date_created" class="block text-sm font-medium text-gray-700">Date Created *</label>
                        <input type="date" wire:model="date_created" id="edit_date_created"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-sky-500 focus:border-sky-500" required>
                        @error('date_created') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" wire:click="closeEditModal"
                            class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit"
                            class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">
                        Update Achievement
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endif

    <!-- Debug Test -->
    <button onclick="console.log('ShowAddModal: {{ $showAddModal }}', 'ShowEditModal: {{ $showEditModal }}')"
            class="fixed bottom-4 right-4 bg-red-500 text-white px-4 py-2 rounded z-50">
        DEBUG
    </button>
</div>
