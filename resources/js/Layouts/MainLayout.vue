<template>
  <header
    class="border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800 w-full"
  >
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')">Listings</Link>
        </div>
        <div class="text-xl font-bold text-indigo-600 dark:text-indigo-300">
          <Link :href="route('listing.index')">LaraZillow</Link>
        </div>
        <div class="flex items-center gap-4" v-if="$page.props.user">
          <div class="text-sm text-gray-500">{{ $page.props.user.name }}</div>
          <Link
            :href="route('listing.create')"
            class="bg-indigo-600 hover:bg-indigo-500 text-white p-2 rounded-md"
            >+New Listings</Link
          >
          <div>
            <Link :href="route('logout')" method="delete" as="button"
              >Logout</Link
            >
          </div>
        </div>
        <div v-else class="flex items-center gap-2">
          <Link :href="route('login')">Sign In</Link>
          <Link :href="route('register')">Register</Link>
        </div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4 w-full">
    <div
      v-if="$page.props.flash.success && show"
      class="flex items-center justify-between mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-100 dark:bg-green-900 p-2"
    >
      <div>{{$page.props.flash.success}}</div>
      <div class="cursor-pointer text-gray-600" v-on:click="handleClose">x</div>
    </div>

    <slot> Default </slot>
  </main>
</template>

<script setup>
import { Link, usePage, router } from "@inertiajs/vue3";
import { ref, computed } from "vue";

const show = ref(true)

setTimeout(() => show.value = false, 30000)

const handleClose = () => {
  show.value = false
}


</script>

