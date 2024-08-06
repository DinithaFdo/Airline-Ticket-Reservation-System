
<div class="form" style="text-align: center; margin: 20px; padding: 20px; border: 1px solid #ccc; border-radius: 10px; background-color: #f1f1f1;">
  <h1 class="mbheading" style="color: #3498db; font-size: 24px; font-weight: bold;">Meal Preference</h1>
  <form action="/includes/meal.inc.php" method="post">
    <select name="meal" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
      <option value="" selected disabled>Meal Type</option>
      <option value="Vegi">Vegitarian</option>
      <option value="nvegi">Non Vegitarien</option>
      <option value="pork">Pork</option>
      <option value="beef">Beef</option>
      <option value="kmeal">Kids Meal</option>
    </select>
    <button class="update-button" name="meal" style="background-color: #3498db; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Change Meal</button>
  </form>
</div>