export const hasSomeParentOfClass = (element, className) => {
  if (!element || !element.classList) return false;
  if (element.classList.contains(className)) {
    return element;
  }
  return element.parentNode && hasSomeParentOfClass(element.parentNode, className);
};
