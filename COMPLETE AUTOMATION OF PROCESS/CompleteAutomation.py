import time
from selenium import webdriver
from selenium.common.exceptions import ElementClickInterceptedException
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as ec
from selenium.webdriver.chrome.options import Options

def trans(x):
    ppsder.execute_script("window.open()")
    ppsder.switch_to.window(ppsder.window_handles[1])
    ppsder.get(r"https://trans-logistics.amazon.com/ssp/dock/ob")
    l = x.partition('-')[0]
    print(l)
    ppsder.find_element_by_xpath("/html/body/div[1]/div[2]/div[1]/div[1]/div[2]/form/div/span/select").send_keys(l)
    time.sleep(4)
    ppsder.find_element_by_xpath("/html/body/div[1]/div[2]/div[2]/div/div[1]/div[2]/div[8]/div[3]/div[2]/label/input").send_keys(x)
    time.sleep(4)
    s1 = ppsder.find_element_by_xpath("/html/body/div[1]/div[2]/div[2]/div/div[1]/div[2]/div[8]/table/tbody/tr[2]").text

    ppsder.find_element_by_xpath("/html/body/div[1]/div[2]/div[2]/div/div[1]/div[2]/div[8]/table/tbody/tr[2]").click()

    s2 = ppsder.find_element_by_xpath("/html/body/div[1]/div[2]/div[2]/div/div[1]/div[3]/div/div[5]/div").text
    ppsder.close()
    print(s1)
    print(s2)

    text = s1 +"\n\n"+ s2
    return s1

shadF = Options()
#shadF.add_extension("chrome://extensions/?id=bkbighdlgofgdhcjnhocalbkiehhpdei")
ppsder = webdriver.Chrome(executable_path=r"C:\Users\ppsder\Desktop\web dev\selenium\chromedriver_win32\chromedriver.exe")

ppsder.get(r"https://optimus-internal.amazon.com/wims/taskdetail/f59da163-a088-4b98-b05a-7eabbacba530")

ppsder.maximize_window()
time.sleep(4)
x = ppsder.find_element_by_xpath(r"/html/body/div[1]/div/div/div[1]/div/div[2]/div/div/div/div[3]/div/div/div/table/tbody/tr[2]/td[2]").text
print (x)
print (x.strip())
#wait = WebDriverWait(ppsder, 5)
y= trans(x)

print(y)
time.sleep(3)

ppsder.switch_to.window(ppsder.window_handles[-1])
ppsder.find_element_by_xpath(r"/html/body/div[1]/div/div/div[1]/div/div[2]/div/div/div/div[2]/div/div[1]/div/div[1]/div/div/button").click()
time.sleep(3)
#ppsder.find_element_by_id("taskNote").click()
ppsder.find_element_by_id("taskNote").send_keys(y)
time.sleep(2)
ppsder.find_element_by_xpath(r"/html/body/div[3]/div[2]/div/div/div[2]/div/div/div[1]/div/div/form/div[2]/div[2]/div/button[2]").click()
#ppsder.find_element_by_css_selector(r"#baked-widget > div > form > div > div:nth-child(1) > div > div > li:nth-child(4) > a").click()
#e1 = wait.until(ec.element_to_be_clickable((By.XPATH, r"/html/body/div/div/form/div/div[1]/div/div/li[1]/a")))
#e1.click()
#ppsder.find_element_by_xpath(r"/html/body/div/div/form/div/div[1]/div/div/li[1]/a").click()


time.sleep(20)

