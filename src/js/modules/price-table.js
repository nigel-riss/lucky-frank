import { hasSomeParentOfClass } from '../utils/dom';

export class PriceTable {
  constructor() {
    this.addEventsListers();
  }


  /**
   * Add click listener to toggle spoilers
   */
  addEventsListers() {
    document.addEventListener('click', (evt) => {
      const priceListRow = hasSomeParentOfClass(evt.target, 'price-table__row');

      if (priceListRow) {
        this.switchPriceListRow(priceListRow);
      }
    });
  }


  /**
   * Switch price-list__row state (open/closed)
   * @param {HTMLElement} rowElement price-list__row to toggle
   */
  switchPriceListRow(rowElement) {
    this.collapseAllRows(rowElement);
    rowElement.classList.toggle('price-table__row--open');
  }

  collapseAllRows(currentRow) {
    const priceListRows = document.querySelectorAll('.price-table__row');
    
    for (const row of priceListRows) {
      if (row != currentRow)
      row.classList.remove('price-table__row--open');
    }
  }
}
