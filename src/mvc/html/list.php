<!-- HTML Document -->

<div class="bbn-overlay">
  <bbn-table :source="root+'data/list'"
             editable="popup"
             :pageable="true"
             :toolbar="['insert']"
             :url="root+'actions/place'"
             >
    <bbns-column label="ID"
      					 field="id"
                 :editable="false"
                 :invisible="true"
    ></bbns-column>
    <bbns-column label="Full address"
      					 field="fulladdress"
                 :editable="false"
                 :min-width="250"
    ></bbns-column>
  	<bbns-column label="Address"
      					 field="address"
                 :invisible="true"
                 :required="true"
    ></bbns-column>
    <bbns-column label="Postal code"
      					 field="pc"
                 :invisible="true"
                 :required="true"
    ></bbns-column>
    <bbns-column label="City"
      					 field="city"
                 :invisible="true"
                 :required="true"
                 :width="120"
    ></bbns-column>
    <bbns-column label="<?= _('Country') ?>"
      					 field="id_country"
                 :source="source.countries"
                 :required="true"
                 :width="120"
    ></bbns-column>
    <bbns-column label="Phone"
      					 field="tel"
                 type="phone"
                 :width="120"
    ></bbns-column>
    <bbns-column label="Mail"
      					 field="email"
                 type="email"
                 :width="150"
    ></bbns-column>
    <bbns-column label="Actions"
      					 :buttons="['edit', 'delete']"
                 :width="180"
    ></bbns-column>
  </bbn-table>
</div>