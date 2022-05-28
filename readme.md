## dummy customers


### Requirement

---

- docker
- docker compose
- make
- composer

### Run

---

### For **run** use this command:

`make run`

If there is no make installed on your device, look at the Makefile file and run the commands manually.
### For running **tests** use this command:

`make test`

You should see this output similar to:
```shell
   PASS  Tests\Unit\ExampleTest
  ✓ that true is true

   PASS  Tests\Feature\CustomerTest
  ✓ see index
  ✓ store customer success
  ✓ store customer validation error
  ✓ store customer validation error2
  ✓ assert not found

  Tests:  6 passed
  Time:   1.40s
```
### For SSH into the running container use this command

`make ssh_container`
