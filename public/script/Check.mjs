let countChecked = 0;

export function checkAll(parentCheck, todosCheck, trash, restore = null) {
  parentCheck.addEventListener("change", (e) => {
    for (const todo of todosCheck) {
      if (e.target.checked) {
        todo.checked = true;
        todo.classList.remove("hidden");
        trash.classList.remove("hidden");
        restore ? restore.classList.remove("hidden") : "";
      } else {
        todo.checked = false;
        todo.classList.add("hidden");
        trash.classList.add("hidden");
        restore ? restore.classList.add("hidden") : "";
      }
    }
  });
}

export function checkEach(parentCheck, todosCheck, trash, restore = null) {
  for (const todoCheck of todosCheck) {
    todoCheck.addEventListener("click", () => {
      countChecked = 0;
      for (const todoCheck of todosCheck) {
        if (todoCheck.checked) {
          countChecked++;
        }
      }
      if (countChecked == 0) {
        parentCheck.checked = false;
        parentCheck.indeterminate = false;
        trash.classList.add("hidden");
        restore ? restore.classList.add("hidden") : "";
      } else if (countChecked == todosCheck.length) {
        parentCheck.checked = true;
        parentCheck.indeterminate = false;
        trash.classList.remove("hidden");
        restore ? restore.classList.remove("hidden") : "";
      } else {
        parentCheck.checked = false;
        parentCheck.indeterminate = true;
        trash.classList.remove("hidden");
        restore ? restore.classList.remove("hidden") : "";
      }
    });
  }
}
