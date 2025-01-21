<div class="text-center d-flex p-10 justify-content-center ">
    <!-- Button to Open Modal -->
    <button wire:click="openModal" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
        Open Modal
    </button>

    <!-- Modal -->
    <div x-data="{ isOpen: @entangle('isOpen') }" x-show="isOpen" class="fixed inset-0 flex items-center justify-center z-50">
        <!-- Modal Background Overlay -->
        <div class="fixed inset-0 bg-black opacity-50" @click="isOpen = false" wire:click="closeModal"></div>

        <!-- Modal Content -->
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md mx-auto z-10 relative transform transition-all duration-300">
            <h2 class="text-2xl font-semibold text-center text-blue-600 mb-4">Popup Modal</h2>

            <p class="text-gray-700 text-center mb-6">This is a simple popup modal using Livewire and Alpine.js.</p>

            <!-- Close Button -->
            <div class="flex justify-end">
                <button @click="isOpen = false" wire:click="closeModal" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-300">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
