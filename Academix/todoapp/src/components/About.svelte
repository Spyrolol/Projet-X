
// About.svelte

<script>
  import { Link } from 'svelte-routing';
</script>

<div>
  <h1 class="text-3xl font-bold underline">
    We are running tailwind in Svelte!
  </h1>
  <h3>This is About Page.</h3>
  <Link to="/">Home</Link><br />
  <Link to="blog">Blog</Link>
</div>
