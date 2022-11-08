<!-- HTML Document -->

<div class="bbn-overlay">
  <bbn-table :source="root+'data/list'"
             editable="popup"
             :pageable="true"
             :toolbar="['insert']"
             :url="root+'actions/place'"
             >
    <bbns-column title="ID"
      					 field="id"
                 :editable="false"
                 :hidden="true"
    ></bbns-column>
    <bbns-column title="Full address"
      					 field="fulladdress"
                 :editable="false"
                 :min-width="250"
    ></bbns-column>
  	<bbns-column title="Address"
      					 field="address"
                 :hidden="true"
                 :required="true"
    ></bbns-column>
    <bbns-column title="Postal code"
      					 field="pc"
                 :hidden="true"
                 :required="true"
    ></bbns-column>
    <bbns-column title="City"
      					 field="city"
                 :hidden="true"
                 :required="true"
                 :width="120"
    ></bbns-column>
    <bbns-column title="<?= _('Country') ?>"
      					 field="id_country"
                 :source="source.countries"
                 :required="true"
                 :width="120"
    ></bbns-column>
    <bbns-column title="Phone"
      					 field="tel"
                 type="phone"
                 :width="120"
    ></bbns-column>
    <bbns-column title="Mail"
      					 field="email"
                 type="email"
                 :width="150"
    ></bbns-column>
    <bbns-column title="Actions"
      					 :buttons="['edit', 'delete']"
                 :width="180"
    ></bbns-column>
  </bbn-table>
</div>